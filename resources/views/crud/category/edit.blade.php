@extends('layouts.crud')
@section('title', "UPDATE CATEGORY")
@section('content')
    <h1 class="mt-5 text-muted">UPDATE CATEGORY</h1>
    <form class="mt-5" method="post" action="{{route('crud.category.update', $category)}}">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label  class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{$category->title}}" placeholder="Title">
            @error('title')
            <strong style="color: #d9534f">{{ $message }}</strong>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection


