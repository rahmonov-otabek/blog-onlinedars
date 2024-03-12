@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <h1 class="display-4">Edit post</h1>
            <p>Edit and submit this form to update a post</p>
            <hr>
            <form action="/posts/{{$post->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="control-group col-12">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-select" required> 
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}
                                {{ $category->id===$post->category_id??'selected'}}">
                                {{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-12 control-group">
                        <label for="title">Post title</label>
                        <input type="text" id="title" class="form-control" name="title"
                        placeholder="Enter Post title" value="{{$post->title}}" required>
                    </div>
                    <div class="control-group col-12 my-2">
                        <label for="content">Post content</label>
                        <textarea name="content" id="content" 
                        class="form-control" placeholder="Enter post content" 
                        rows="10" required>{{$post->content}}</textarea>
                    </div>
                    <hr>
                    <div class="control-group col-12 text-center mt-2">
                        <button class="btn btn-primary">
                            Update Post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection