<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function GetIndex() {
        $posts = POST::paginate(10);
        return view('blog.index')->with('posts', $posts);
    }

    public function GetSingle($slug) {
        $post = POST::where('slug', '=', $slug)->first();
        return view('blog.single')->with('post', $post);
    }
}
