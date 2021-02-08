<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

/**
 * @group Articles
 *
 *Managing Articles
 * */
class ArticleController extends Controller
{

    /**
     * Get Articles
     *
     *List all the articles
     *
     * @queryParam page Which page to show. Example: 10
     * */
    public function index()
    {
        return ArticleResource::collection(Article::paginate(6));
    }


    public function create()
    {
        //
    }


    public function store(StoreArticleRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $name = "articles/" . uniqid() . "." . $file->extension();
            $file->storePubliclyAs("public",$name);
            $data["image"] = url('/storage/' . $name);
        }
        $article = Article::create($data);
        return new ArticleResource($article);
    }

    public function show($id)
    {
        return new ArticleResource(Article::findOrFail($id));
    }


    public function edit($id)
    {
        //
    }


    public function update(Article $article, StoreArticleRequest $request)
    {
      $article->update($request->all());

      return new ArticleResource($article);
    }


    public function destroy(Article $article)
    {
        $article->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
