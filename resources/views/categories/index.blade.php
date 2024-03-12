@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif
                <a href="{{ route('categories.create') }}" class="btn btn-primary float-end">Create category</a>
                <h1 class="display-one">Categories</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>    
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('categories.edit', $category->id)}}" class="btn btn-success float-start">
                                        Edit
                                    </a>
                                    <form
                                    action="{{ route('categories.destroy', $category->id)}}"
                                    method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger mx-2" type="submit" onclick="return confirm('Rozimisiz?')">
                                        Delete
                                    </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <p>Categories not found.</p>
                        @endforelse
                    </tbody>
                </table>            
            </div>
        </div>
    </div>
@endsection