<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;


class ArticleController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:view articles', only: ['index']),
            new Middleware('permission:create articles', only: ['create']),
            new Middleware('permission:edit articles', only: ['edit']),
            new Middleware('permission:delete articles', only: ['destroy']),
        ];
    }
    
    public function index()
    {
        $articles = Article::all();
        return view('articles.index',compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'article' => 'required',
        ]);

        Article::create([
            'title' => $request->title,
            'author' => $request->author,
            'article' => $request->article
        ]);

        return redirect('/articles')->with('success', 'Article created successfully');
    }

    public function edit($id)
    {
        $articles = Article::find($id);
        return view('articles.edit',compact('articles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'article' => 'required',
        ]);

        Article::find($id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'article' => $request->article
        ]);

        return redirect('/articles')->with('success', 'Article updated successfully');
    }

    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect('/articles')->with('success', 'Article deleted successfully');
    }
}
