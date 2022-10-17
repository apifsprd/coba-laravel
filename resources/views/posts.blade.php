{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
<h1 class="text-center mb-3">{{$title}}</h1>

<div class="row mb-3 justify-content-center">
    <div class="col-md-6">
        <form action="/posts">
            @if (request('category'))
                <input type="hidden" name="category" value="{{request('category')}}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{request('author')}}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" name="search" value="{{request('search')}}">
                <button class="btn btn-secondary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

{{-- HERO POST --}}
@if ($posts->count())
    <div class="card mb-3">
    @if ($posts[0]->image)
        <div style="max-height: 400px; overflow:hidden">
        <img src="{{asset('storage/' . $posts[0]->image)}}" class="img-fluid py-3" alt="{{$posts [0]->category->name}}">
        </div>
    @else
        <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
    @endif
    <div class="card-body text-center">
        <h5 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
        <p>
            <small>
                {{$posts[0]->created_at->diffForHumans()}} by <a class="text-decoration-none" href="/posts?author={{$posts[0]->user->username}}">{{$posts[0]->user->name}}</a> | <a class="text-decoration-none" href="/posts?category={{$posts[0]->category->slug}}">{{$posts[0]->category->name}}</a> 
            </small>
        </p>
        <p class="card-text">{{$posts[0]->excerpt}}</p>

        <a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none btn btn-primary btn-sm">Read more..</a>
    </div>
    </div>

<div class="row">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4">
        <div class="card">
        <div class="position-absolute px-3 py-1" style="background-color: rgba(0,0,0,0.5)"><a class="text-decoration-none text-white" href="/posts?category={{$post->category->slug}}">{{$post->category->name}}</a></div>
        @if ($post->image)
            <div style="max-height: 200px; overflow:hidden">
                <img src="{{asset('storage/' . $post->image)}}" class="img-fluid py-3" alt="{{$post->category->name}}">
            </div>
        @else
            <img src="https://source.unsplash.com/500x200?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
        @endif
        
        <div class="card-body">
            <h5 class="card-title"><a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
            <p> {{$post->created_at->diffForHumans()}} by <a class="text-decoration-none" href="/posts?author={{$post->user->username}}">{{$post->user->name}}</a> </p>
            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="/posts/{{$post->slug}}" class="text-decoration-none">Read more..</a>
        </div>
        </div>
    </div>
    @endforeach
</div>

@else
    <p class="text-center fs-4">No post found.</p>
@endif

<div class="d-flex justify-content-center py-2">
    {{$posts->links()}}
</div>

@endsection
