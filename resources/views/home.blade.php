@extends('layout')
@section('content')
<div class="container">
    <a href="/posts/create" class="btn btn-success">New Post</a>
    <br>
    <br>
    <div class="card">
        <div class="card-header text-center">
            Contents
        </div>
        @foreach($post as $item)
        <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <p class="card-text">{{ $item->description }}</p>
            <div class="container d-flex d-flex-row p-0">
                <a href="/posts/{{ $item->id }}" id class="btn btn-primary mr-1">View</a>
                <a href="/posts/{{ $item->id }}/edit" id class="btn btn-success mr-1">Edit</a>
                <form action="/posts/{{ $item->id }}" method="post">
                    @csrf
                    @method('Delete')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div><hr>
        @endforeach
    </div>
</div>
@endsection