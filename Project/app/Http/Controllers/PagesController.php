<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {
  public function getIndex() {
    $post = Post::orderBy('created_at', 'desc')->limit(4)->get();
    return view('pages/welcome')->with('posts', $post);
  }

  public function getAbout() {
    $first = 'Alex';
    $last = 'Curtis';
    $fullname = $first . " " . $last;
    $data['fullname'] = $fullname;
    return view('pages/about')->with('data', $data);
  }

  public function getContact() {
    return view('pages/contact');
  }
}