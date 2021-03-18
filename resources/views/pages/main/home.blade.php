@extends('layouts.default')
@section('title')
    Home
@endsection
@section('keywords')
    blog, home, posts, tech, technology, programming, web, development
@endsection
@section('description')
    This is a blog home page where you can read about technology, programming, web development.
@endsection

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <h1 class="display-4">Welcome to TechTalk blog</h1>
        <h2 class="lead">This is a blog where you can read about technology, programming, web development.</h2>
        </div>
    </div>
    <div class="breadcrumb">
        <h3 class="breadcrumb-item">
            Posts
        </h3>
        <h3 class="breadcrumb-item active text-primary">Editor's pick</h3>
    </div>
   <!-- Blog Post -->
   @foreach ($posts as $post)
       @include('partials.post');
   @endforeach

@endsection
