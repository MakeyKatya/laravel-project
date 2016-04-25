<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\User;
use Illuminate\Support\Facades\Input;


class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only'=>'create']);
    }

    public function index(){
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article){
        return view('articles.show', compact('article'));
    }

    public function create(){
        $tags = Tag::lists('name','id');
        return view('articles.create',compact('tags'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:2',
            'body' => 'required',
            'published_at' => 'required',
            'tags' => 'required',
        ]);


        if($validator->fails()){
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $this->createArticle($request);

        flash()->overlay('Your article has been created','Good Job')->important();

        return redirect('articles');

    }


    public function edit(Article $article){
        $tags = Tag::lists('name','id');
        return view('articles.edit', compact('article','tags'));
    }

    public function update(Article $article,  Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:2',
            'body' => 'required',
            'published_at' => 'required',
            'tags' => 'required'
        ]);

        if($validator->fails()){
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $article->update($request->all());
        $this->syncTags($article,$request->input('tags'));

        return redirect('articles');
    }

    private function syncTags(Article $article, array $tags){
        $article->tags()->sync($tags);
    }

    private function createArticle(Request $request){
        $title = $request->input('title');
        $body = $request->input('body');
        $published_at = $request->input('published_at');
        $user_id = Auth::user()->id;


        $article = Article::create([
            'title' => $title,
            'body' => $body,
            'published_at' => $published_at,
            'user_id' => $user_id,
        ]);
        $article->save();

        $this->syncTags($article,$request->input('tags'));

        return $article;
    }

}
