@extends('layouts.crud')
@section('title', "ALL CATEGORIES")
@section('content')
    <h1 class="mt-5 text-muted">ALL CATEGORIES</h1>
    <table class="table mt-5 mb-4">
        @if(session('success'))
            <div class="alert alert-success">
                <h4>{{session('success')}}</h4>
            </div>
        @endif
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($categories as $category)
        <tr>
            <td>{{$category->title}}</td>
            <td class="text-center">
                <a class="btn btn-primary" href="{{route('crud.category.show',$category)}}"><i class="fas fa-eye"></i></a>
                <a class="btn btn-success" href="{{route("crud.category.edit", $category)}}"><i class="fas fa-edit"></i></a>
                <form action="{{route('crud.category.destroy', $category)}}" method="POST" style="display: contents">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>

            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
@endsection


