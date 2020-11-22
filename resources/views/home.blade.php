@extends('layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            Contents
        </div>
        @foreach($data as $item)
        <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <p class="card-text">{{ $item->description }}</p>
            <a href="#" class="btn btn-primary">View</a>
        </div><hr>
        @endforeach
    </div>
</div>
@endsection