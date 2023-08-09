<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::paginate();
        $articles->links();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $data = $request->validated();

        $article = new Article(); 
        $article->fill($data);
        $article->save();

        return redirect()
           ->route('articles.index')
           ->with('success, Article was create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $obj)
    {
        $data = $request->validated();

        $obj->fill($data);
        $obj->save();

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Article::findOrFail($id);

        if ($data) {
            $data->destroy($id);
        }

        return redirect()->route('articles.index');
    }
}
