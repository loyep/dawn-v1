<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Http\Request;

class TagController extends Controller
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
        $this->model = app(Tag::class);
        $this->validation = $validation;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return TagResource
     */
    public function index(Request $request)
    {
        $tags = $this->model
            ->withCount('posts')
            ->when($keywords = $request->get('keywords'), function ($query) use ($keywords) {
                $query->where('name', 'like', '%'.$keywords.'%');
            })
            ->orderByDesc('updated_at')->paginate($request->get('per_page', 10));

        return new TagResource($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = $this->model->create($request->all());

        $response = [
            'message' => 'Tag created.',
            'data'    => new TagResource($tag),
        ];

        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return TagResource
     */
    public function show(int $id)
    {
        $tag = $this->model->find($id);

        return new TagResource($tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tag = $this->model->findOrFail($id);
        $tag->fill($request->all());
        $tag->save();
        $response = [
            'message' => 'Tag updated.',
            'data'    => $tag->toArray(),
        ];

        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $ids
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($ids)
    {
        $ids = explode(',', $ids);
        $this->model->destroy($ids);

        return response()->json([
            'message' => 'Delete success',
        ]);
    }
}
