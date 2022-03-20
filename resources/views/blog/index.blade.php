@extends('layouts.master')
@section('content')

@foreach($posts as $post)
<div class="card" >
    <div class="card-body">
      <h5 class="card-title">{{ $post->title }}</h5>
      <p style="font-weight: bold;">
        @foreach($post->tags as $tag)
            - {{ $tag->name }} -
        @endforeach
      </p>
      <p class="card-text">{{ $post->content }}.</p>
      <a href="{{ route('blog.post', ['id'=>$post->id]) }}" class="btn btn-primary">Ver mas</a>
    </div>
  </div>
@endforeach

@endsection
