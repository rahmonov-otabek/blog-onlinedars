@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="deisplay-one mt-5">{{config('app.name')}}</h1>
                <p>This awesome blog has many articles, click the button below to see them</p>
                <a href="/posts" class="btn btn-outline-primary">Show Blog</a>
            </div>
        </div>
    </div>
@endsection