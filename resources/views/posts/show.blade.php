@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <p>
                <strong>{{ $post->category->name}}</strong> &bull;
                {{ $post->created_at->setTimezone('Asia/Tashkent')->format('M j, Y \a\t H:i:s')}}
            </p>
            <a href="/posts" class="btn btn-outline-primary float-end">Go back</a>
            <h1 class="display-one">{{ $post->title}}</h1>
            <p>{{$post->content}}</p>
            <hr>
            <form action="/posts/{{$post->id}}" method="POST" class="float-end">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete Post</button>
            </form>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit Post</a>
        </div>
    </div>
</div>
@endsection