@extends('layouts.main')
@section('content')

@foreach($posts as $post)
<ul>
    <a href="{{route('posts.show',$post->id)}}"><li>{{$post->title}}</li></a>
</ul>

@endforeach

<a class="btn btn-primary" href="{{route('posts.create')}}">Add</a>

@endsection



