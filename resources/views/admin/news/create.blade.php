@extends('main.index')
@section('content')
<h2>Add news</h2> </br> <a href=' {{route("news.index")}}'>Home</a>
<div class="container">
<form method="post" action="{{ route('news.store') }}">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter email">


    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">


    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop
