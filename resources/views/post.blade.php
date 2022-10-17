{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h6>/<a href="/posts">Posts</a>/<a href="/posts?category={{$post[0]->category->slug}}">{{$post[0]->category->name}}</a></h6>
      <article>

      <h1>{{ $post[0]->title }}</h1>

      <h6>
      by <a class="text-decoration-none" href="/posts?author={{$post[0]->user->username}}">{{$post[0]->user->name}}</a> | <a class="text-decoration-none" href="/posts?category={{$post[0]->category->slug}}">{{$post[0]->category->name}}</a>
      </h6>

      @if ($post->image)
      <div style="max-height: 400px; overflow:hidden">
        <img src="{{asset('storage/' . $post->image)}}" class="img-fluid py-3" alt="{{$post->category->name}}">
      </div>
      @else
        <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="img-fluid py-3" alt="{{$post->category->name}}">
      @endif

      <div class="my-3" style="text-align: justify">
      {!! $post[0]->body !!}
      </div>
      </article>
    </div>
  </div>
</div>



<a href="/posts">Back to post</a>
@endsection
