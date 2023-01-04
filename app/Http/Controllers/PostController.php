<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        return view('pages.posts.index');
    }

    public function show(Post $post)
    {
         
        $this->authorize(PostPolicy::UPDATE, $post);
        return view('pages.posts.index');
    }
    
}
