@extends('layouts.admin')

$@section('content')
    <h1>Posts</h1>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Photo</th>
                <th>Owner</th>
                <th>Category</th>
                <th>title</th>
                <th>Body</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
            @if (count($posts))
                @foreach ($posts as $post)
                
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img src="{{ $post->photo_id?$post->photo->file:'http://placehold.it/50x50' }}" height="50" width="50" /></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category?$post->category->name:'Not Updated'}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>


                @endforeach
            @endif
        </tbody>
    </table>


@endsection