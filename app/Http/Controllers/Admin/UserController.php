<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\BaseModel;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * @var BaseModel
     */
    protected $model;

    /**
     * @var UserService
     */
    protected $service;

    /**
     * UsersController constructor.
     *
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @param UserRequest $request
     *
     * @return UserResource
     */
    public function index(UserRequest $request)
    {
        return $this->service->paginate($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     *
     * @return JsonResponse
     */
    public function store(UserRequest $request)
    {
        return $this->service->store($request);
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
        return $this->service->show($request, $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param $id
     *
     * @return JsonResponse
     */
    public function update(UserRequest $request, $id)
    {
        return $this->service->update($request, $id);
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
        return $this->destroy($id);
    }

    /**
     * @return UserResource
     */
    public function profile()
    {
        return $this->service->profile();
    }
}
