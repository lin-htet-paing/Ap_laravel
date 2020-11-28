@extends('layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            New Post
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">
            <form action="/posts" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Enter Description">{{ old('description') }}</textarea>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/posts" class="btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection