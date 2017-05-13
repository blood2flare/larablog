@extends('main')

@section('title', ' | Blogs')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Blogs</h1>
    </div>
  </div>

  @foreach ($posts as $post)
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <hr>
        <h2>{{ $post->title }}</h2>
        <h6>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h6>
        <p>{{ substr($post->body,0,205) }}{{ strlen($post->body) > 250 ? '...' : '' }}</p>
        <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read more..</a>
      </div>
    </div>
  @endforeach

  <div class="row">
    <div class="col-md-12 text-center">
      {!! $posts->links() !!}
    </div>
  </div>
@endsection