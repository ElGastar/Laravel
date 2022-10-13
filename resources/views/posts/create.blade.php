@extends('layouts.main')
@section('content')
<form>
  <div class="form-group" >
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title"  placeholder="Title">
  </div>
  <div class="form-group">
    <label for="title">Content</label>
    <textarea type="text" name="title" class="form-control" id="title"  placeholder="Title"></textarea>
  </div>
  <div class="form-group">
    <label for="title">Image</label>
    <input type="text" name="images" class="form-control" id="image"  placeholder="Image">
  </div>
  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection


