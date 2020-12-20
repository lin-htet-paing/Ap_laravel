@extends('layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            Edit Post
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
            <form action="/posts/{{$post->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name', $post->name)}}" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Enter Description">{{old('description', $post->description)}}</textarea>
                </div>
                <div>
									<select name="category_id" id="category-id" class="form-control">
										@foreach($category_data as $cat)
										@if($post->category->id == $cat->id)
											<option value="{{$cat->id}}" selected>{{$cat->name}}</option>
										@else
											<option value="{{$cat->id}}">{{$cat->name}}</option>
										@endif
										@endforeach
									</select>
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