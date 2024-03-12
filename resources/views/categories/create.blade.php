@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="{{ route('categories.index')}}" class="btn btn-outline-primary float-end">
            Go back</a>
            <h1 class="display-4">Create a New Category</h1> 
            <hr>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 control-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" class="form-control" name="name"
                        placeholder="Enter Category name" value="{{ old('name') }}" required>
                    </div> 
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="control-group col-12 text-center mt-4">
                        <button class="btn btn-primary">
                            Create Category
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection