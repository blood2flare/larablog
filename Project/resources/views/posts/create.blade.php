@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create New Post</h1>
      <hr>

      {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255', 'onchange' => 'document.getElementById("slug").value = slugify(this.value)']) }}

        {{ Form::label('body', 'Post Body:') }}
        {{ Form::textarea('body', null, ['class' => 'form-control', 'required' => '']) }}

        {{ Form::label('slug', 'Slug:') }}
        {{ Form::text('slug', null, ['class' => 'form-control', 'readOnly' => '']) }}

        {{ Form::submit('Create New Post', ['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;']) }}
      {!! Form::close() !!}
      <script>
        function slugify(text) {
          return text.toString().toLowerCase()
            .replace(/\s+/g, '-')           // Replace spaces with -
            .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
            .replace(/\-\-+/g, '-')         // Replace multiple - with single -
            .replace(/^-+/, '')             // Trim - from start of text
            .replace(/-+$/, '');            // Trim - from end of text
        }
      </script>
    </div>
  </div>
@endsection

@section('scripts')
  {!! Html::script('js/parsley.min.js') !!}
@endsection