<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{

    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function store(){

        $data = request()->validate([
            'title' => '',
            'content' => ''
        ]);

        Post::create($data);
        
    }

}
