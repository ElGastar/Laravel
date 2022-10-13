@extends('layouts.main')
@section('content')
<form action ="{{route('posts.update',$post->id)}}" method="post">
@csrf
@method('patch')
  <div class="form-group" >
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title"  placeholder="" value="{{$post->title}}">
  </div>
  <div class="form-group">
    <label for="title">Content</label>
    <textarea type="text" name="content" class="form-control" id="content"  >{{$post->content}}</textarea>
  </div>
  <div class="form-group">
    <label for="title">Image</label>
    <input type="text" name="images" class="form-control" id="images"  value="{{$post->images}}">
  </div>
  <div>  <button type="submit" class="btn btn-primary mt-3">Update</button>
  <form action="{{(route('posts.destroy',$post->id))}}" method="post">
  @csrf
  @method('delete')
  <button type="submit" class="btn btn-danger mt-3">Delete</button>
  </form>

         <a class="btn btn-primary mt-3" href="{{route('posts.index')}}">Back</a>
  </div>

</form>
@endsection


