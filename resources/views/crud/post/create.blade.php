@extends('layouts.crud')
@section('title', "CREATE POST")
@section('content')
    <h1 class="mt-5 text-muted">CREATE POST</h1>
    <form class="mt-5" method="post" action="{{route('crud.post.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title">
            @error('title')
            <strong style="color: #d9534f">{{ $message }}</strong>
            @enderror
        </div>
        <div class="mb-3">
            <select class="form-select" name="category_id">
                <option selected>Open this select menu</option>
                @forelse($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @empty
                    <h2>No categories</h2>
                @endforelse
                @error('category_id')
                <strong style="color: #d9534f">{{ $message }}</strong>
                @enderror
            </select>
        </div>
        <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="3">{{old('description')}}</textarea>
            @error('description')
            <strong style="color: #d9534f">{{ $message }}</strong>
            @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Author</label>
            <input type="text" class="form-control" name="author" value="{{old('author')}}" placeholder="Author">
            @error('author')
            <strong style="color: #d9534f">{{ $message }}</strong>
            @enderror
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" name="image">
            <label class="input-group-text" for="image">Upload</label>
            @error('image')
            <strong style="color: #d9534f">{{ $message }}</strong>
            @enderror
        </div>
        <div class="mb-3">
         <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection


