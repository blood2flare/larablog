@extends('main')

@section('title', '| Homepage')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>KS System</h1>
        <p>Description text</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">All Posts</a></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      @foreach ($posts as $post)
        <div class="post">
          <h2>{{ $post->title }}</h2>
          <p>{{ (strlen($post->body) > 300) ? substr($post->body, 0, 300)."..." : $post->body }}</p>
          <a href="#" class="btn btn-primary btn-lg" role="button">Read more</a>
        </div>
        <hr>
      @endforeach
    </div>
    <div class="col-md-3 col-md-offset">
      <h2>Sidebar</h2>
    </div>
  </div>
@endsection