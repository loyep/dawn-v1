<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $model;

    /**
     * The validation factory implementation.
     *
     * @var \Illuminate\Contracts\Validation\Factory
     */
    protected $validation;

    /**
     * PostController constructor.
     *
     * @param ValidationFactory $validation
     */
    public function __construct(ValidationFactory $validation)
    {
        $this->model = app(Post::class);
        $this->validation = $validation;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return PostResource
     */
    public function index(Request $request)
    {
        $posts = $this->model
            ->with('tags:id,name', 'user:id,name', 'category:id,name')
            ->withCount('comments')
            ->when($keywords = $request->get('keywords'), function ($query) use ($keywords) {
                $query->where('title', 'like', `%{$keywords}%`);
            })
            ->when($tag = $request->get('tag'), function ($query) use ($tag) {
                $query->whereHas('tags', function ($query) use ($tag) {
                    $query->where('id', $tag);
                });
            })
            ->when($user = $request->get('user'), function ($query) use ($user) {
                $query->where('user_id', $user);
            })
            ->when($category = $request->get('category'), function ($query) use ($category) {
                $query->where('category_id', $category);
            })
            ->when($request->get('status'), function ($query) use ($request) {
                $query->where('status', $request->get('status'));
            })
            ->orderByDesc('published_at', 'desc')
            ->paginate($request->get('per_page', 10));

        return new PostResource($posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $post = $this->model->findOrFail($id);
        $post->fill($request->all());
        $post->save();
        $response = [
            'message' => 'Post updated.',
            'data' => $post->toArray(),
        ];

        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string|int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $this->model->destroy($id);

        return response()->json([
            'message' => 'Delete success',
        ]);
    }
}
