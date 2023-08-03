@extends('layouts.crud')
@section('title', "SHOW CATEGORY")
@section('title', $category->title)
@section('content')
    <h1 class="mt-5 mb-5 text-muted">Category - {{$category->title}}</h1>
    <a href="{{route('crud.category.index')}}" class="btn btn-success mb-5"><i class="fas fa-arrow-left"></i></a>
    <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Title</div>
        <div class="card-body text-primary">
            <h5 class="card-title">{{$category->title}}</h5>
        </div>
    </div>
@endsection


