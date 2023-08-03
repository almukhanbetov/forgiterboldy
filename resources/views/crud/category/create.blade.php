@extends('layouts.crud')
@section('title', "CREATE CATEGORY")
@section('content')
    <h1 class="mt-5 text-muted">CREATE CATEGORY</h1>
    <form class="mt-5" method="post" action="{{route('crud.category.store')}}">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title">
            @error('title')
            <strong style="color: #d9534f">{{ $message }}</strong>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection


