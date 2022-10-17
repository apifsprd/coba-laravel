{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>
    <div class="py-5">
        @foreach ($authors as $author)
            <ul>
                <li>
                    <h4><a href="/author/{{ $author->username }}">{{ $author->name }}</a>
                    <h4>
                </li>
            </ul>
        @endforeach
    </div>
@endsection
