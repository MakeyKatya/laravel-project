<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;
use App\Models\UserPost;
use Auth;

class PostController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    public function index(){
        $res = Post::orderBy('created_at', 'ASC')->get();
        return view('posts')->with('posts', $res);
    }
    public function show_post($id){
        $res = Post::find($id);
        return view('post')->with('post', $res);
    }

    public function like($id){
        $post = Post::find($id);
        $user_id = Auth::user()->id;
        $count = UserPost::whereRaw('user_id = ? and post_id = ?', [$user_id, $id])->count();
        if($count == 0){
            $post->rating += 1;
            $post->save();
            $userPost = new UserPost();
            $userPost->user_id = $user_id;
            $userPost->post_id = $id;
            $userPost->save();
        }
        return $post->rating;
    }
    public function dislike($id){
        $post = Post::find($id);
        $user_id = Auth::user()->id;
        $count = UserPost::whereRaw('user_id = ? and post_id = ?', [$user_id, $id])->count();
        if($count == 0){
            $post->rating -= 1;
            $post->save();
            $userPost = new UserPost();
            $userPost->user_id = $user_id;
            $userPost->post_id = $id;
            $userPost->save();
        }
        return $post->rating;
    }
}

