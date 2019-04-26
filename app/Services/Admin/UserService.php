<?php

namespace App\Services\Admin;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\BaseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserService.
 */
class UserService extends BaseService
{
    /**
     * @param UserRequest $request
     *
     * @return UserResource
     */
    public function paginate(UserRequest $request)
    {
        $users = User::withCount('posts')
            ->when($name = $request->get('name'), function ($query) use ($name) {
                $query->where('name', 'like', '%'.$name.'%');
            })
            ->paginate($request->get('per_page', 10));

        return new UserResource($users);
    }

    /**
     * Display the specified resource.
     *
     * @param UserRequest $request
     * @param int         $id
     *
     * @return UserResource
     */
    public function show(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);

        return new UserResource($user);
    }

    /**
     * @param UserRequest $request
     *
     * @return JsonResponse
     */
    public function store(UserRequest $request)
    {
        $data = array_merge($request->all(), [
            'password' => Hash::make($request->get('password')),
        ]);

        $user = User::create($data);

        $response = [
            'message' => 'User created.',
            'data'    => new UserResource($user),
        ];

        return response()->json($response);
    }

    /**
     * @param UserRequest $request
     * @param int         $id
     *
     * @return JsonResponse
     */
    public function update(UserRequest $request, int $id)
    {
        $user = User::findOrFail($id);
        $data = array_merge($request->all(), [
            'password' => Hash::make($request->get('password')),
        ]);
        $user->fill($data);
        $user->save();
        $response = [
            'message' => 'User updated.',
            'data'    => $user->toArray(),
        ];

        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string|int $id
     *
     * @return JsonResponse
     */
    public function destroy($id)
    {
        User::destroy($id);

        return response()->json([
            'message' => 'Delete success',
        ]);
    }

    /**
     * @return UserResource
     */
    public function profile()
    {
        $user = Auth::user();
        $user->roles = ['admin'];

        return new UserResource($user);
    }
}