@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <a href="/posts/create" class="btn btn-outline-primary btn-sm float-end">Create new post</a>
            <h1>Our blog!</h1>
            <p>
                Enjoying reading our posts. Click on a post to read!
            </p>
            <ul>
                @forelse ($posts as $post)
                    <li><a href="/post/{{$post -> id}}">{{ $post->title}}</a></li>                    
                @empty
                    <li>No blog posts available.</li>
                @endforelse
            </ul>
        </div>
        <div class="col-2">
            <h2>Category</h2>
            <hr>
            <ul>
                    <li><a href="/posts/">All categories</a></li> 
                @forelse ($categories as $category)
                    <li><a href="/posts/{{$category->id}}">{{ $category->name}}</a></li>                    
                @empty
                    <li>No blog categories available.</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
