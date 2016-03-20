<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Redirect;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::findOrFail($id);

        /*if(!$article){
            abort(404);
        }*/

        return view('articles.show', compact('article'));
    }

    public function create(){

        return view('articles.create');

    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:2',
            'body' => 'required',
            'published_at' => 'required'
        ]);

        if($validator->fails()){
            return Redirect::back()->withInput()->withErrors($validator);
        }

        Article::create($request->all());
        return redirect('articles');
    }


    public function edit($id){
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id,  Request $request){
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }

}
