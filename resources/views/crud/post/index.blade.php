@extends('layouts.crud')
@section('title', "ALL POSTS")
@section('content')
    <h1 class="mt-5 text-muted">ALL POSTS</h1>
    <table class="table mt-5 mb-4">
        @if(session('success'))
            <div class="alert alert-success">
                <h4>{{session('success')}}</h4>
            </div>
        @endif
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Categories</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
            <th scope="col">Image</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->category_id}}</td>
            <td>{{$post->description}}</td>
            <td>{{$post->author}}</td>
            <td><img src="{{asset('storage/post/'.$post->image ?? 'no-image.png')}}" width="60" alt=""></td>
            <td class="text-center">
                <a class="btn btn-primary" href="{{route('crud.post.show',$post)}}"><i class="fas fa-eye"></i></a>
                <a class="btn btn-success" href="{{route("crud.post.edit", $post)}}"><i class="fas fa-edit"></i></a>
                <form action="{{route('crud.post.destroy', $post)}}" method="POST" style="display: contents">
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


