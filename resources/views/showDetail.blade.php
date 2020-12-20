@extends('layout')
@section('content')
<div class="container">
    <br>
    <br>
    <div class="card">
        <div class="card-header text-center">
            Contents
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->name }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <p class="font-italic">{{'Category : ' . $post->category->name}}</p>
            <a href="/posts" class="btn btn-primary">Back</a>
        </div><hr>
    </div>
</div>
@endsection