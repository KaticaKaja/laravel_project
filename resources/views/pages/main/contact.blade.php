@extends('layouts.default')
@section('title')
    Contact
@endsection
@section('keywords')
    blog, home, posts, tech, technology, programming, web, development, contant, admin
@endsection
@section('description')
    This is a blog home page where you can read about technology, programming, web development.
    You can contact admin here.
@endsection

@section('content')
<div class="container">
    <h1>Contact our admins here</h1>
<form action="#" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">How would you rate us?</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Send a message</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
