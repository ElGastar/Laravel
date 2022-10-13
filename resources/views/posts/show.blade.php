@extends('layouts.main')
@section('content')
<ul>
   <li>{{$post->title}}</li>
   <li>{{$post->content}}</li>
   <li>{{$post->images}}</li>
</ul>
@endsection


