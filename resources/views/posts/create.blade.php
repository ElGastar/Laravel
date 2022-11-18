@extends('layouts.main')
@section('content')
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="title">Content</label>
        <textarea type="text" name="content" class="form-control" id="title" placeholder="Title"></textarea>
    </div>
    <div class="form-group">
        <label for="title">Image</label>
        <input type="text" name="images" class="form-control" id="image" placeholder="Image">
    </div>
    <div class="form-group ">
        <label for="title">Category</label>
        <select class=" form-select" aria-label="Default select example" name="category_id">
            <option selected>Open this select menu</option>
            @foreach($categories as $category)

            <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group ">
        <label for="tags">Tags</label>
        <!-- очен важно написать name="tags[]" тогда можно получить массив multiple тегов  -->
        <select multiple class=" form-select" aria-label="Default select example" name="tags[]">
            @foreach($tags as $tag)

            <option value="{{$tag->id}}">{{$tag->title}}</option>
            @endforeach
        </select>
    </div>



    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection
