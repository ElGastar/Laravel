@extends('layouts.main')
@section('content')
<ul>
   <li>{{$post->title}}</li>
   <li>{{$post->content}}</li>
   <li>{{$post->images}}</li>
</ul>
<div>
    <a class="btn btn-info" href="{{route('posts.edit',$post->id)}}">Edit</a>
    <a  class="btn btn-primary" href="{{route('posts.index')}}">Back</a>
</div>
@endsection


