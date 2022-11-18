@extends('layouts.main')
@section('content')
<ul>
    <li>Title:{{$post->title}}</li>
    <li>Content:{{$post->content}}</li>
    <li>Imgae:{{$post->images}}</li>
    <li>Category:{{$category}}</li>
    <li>Tags:
    <ul>
     @foreach($tags as $tag)
     <li>{{$tag->title}}</li>
     @endforeach

    </ul>

    </li>
</ul>
<div>
    <a class="btn btn-info" href="{{route('posts.edit',$post->id)}}">Edit</a>
    <a class="btn btn-primary" href="{{route('posts.index')}}">Back</a>
</div>
@endsection
