<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function like(Request $request)
    {
        $article = Article::find($request->id);
        $key = 'article|' . $request->id . '|' . $request->ip();
        $is_liked = Cache::has($key);
        if (!$is_liked) {
            Cache::add($key, true);
            $article->increment('likes_count');
        } else {
            Cache::forget($key);
            $article->decrement('likes_count');
        }
        $likes_count = $article->likes_count;
        return response()->json([
            'is_liked'    => !$is_liked,
            'likes_count' => $likes_count,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     *
     * @param Request $request
     * @param string  $slug
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slug)
    {
        try {
            $post = Article::with('category', 'tags', 'user', 'content', 'comments')
                ->where('slug', $slug)
                ->published()
                ->recent()
                ->firstOrFail();
//            $likes = Cache::get($request->ip() . '(liked list)', []);
//            $isLiked = in_array($article->id, $likes);
            $isLiked = false;

            $post->increment('views_count');

//            Blog::setTitle($article->title);

            $title = $post->title;
            $adverts = collect([]);// Advert::all();
            return view('posts.' . $post->getTemplate(), compact('post', 'isLiked', 'adverts', 'title'));
        } catch (ModelNotFoundException $e) {
            return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Article $article
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Article      $article
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Article $article
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
