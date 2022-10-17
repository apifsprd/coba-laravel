@extends('dashboard.layouts.main')

@section('container')
    <div class="row my-3 justify-content-center">
      <div class="col-lg-8">
        <article>
        <h1 class="py-3">{{ $post->title }}</h1>
  
       <div>
        <a href="/dashboard/posts" class="btn btn-success btn-sm"><span data-feather="arrow-left"></span> Back to my posts</a>
        <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning btn-sm"><span data-feather="edit"></span> Edit</a>
        <form action="/dashboard/posts/{{$post->slug}}" method="POST" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger btn-sm" type="submit" onclick="confirm('Are you sure to delete data?')"><span data-feather="x-circle"></span> Delete</button>
        </form>
       </div>
  
        @if ($post->image)
          <div style="max-height: 400px; overflow:hidden">
            <img src="{{asset('storage/' . $post->image)}}" class="img-fluid py-3" alt="{{$post->category->name}}">
          </div>
        @else
          <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="img-fluid py-3" alt="{{$post->category->name}}">
        @endif
       
  
        <div class="my-3" style="text-align: justify">
        {!! $post->body !!}
        </div>
        </article>
      </div>
    </div>
@endsection