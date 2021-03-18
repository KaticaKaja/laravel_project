@extends('layouts.default')
@section('title')
    Author
@endsection
@section('keywords')
    blog, home, posts, tech, technology, programming, web, development, author, katica, rankovic
@endsection
@section('description')
    This is a blog home page where you can read about technology, programming, web development.
    And this is author's page.
@endsection

@section('content')
<div class="row d-flex justify-content-center my-3">
    <div class="col-md-8 ">
        <div class="card w-100" style="width: 18rem;">
            <img src="{{ asset('assets/img/profilslika.jpg') }}" class="card-img-top" alt="Katica Rankovic">
            <div class="card-body">
                <h4 class="card-title">Katica Rankovic 6/17</h4>
                <p class="card-text">This was one of my projects for Visoka ICT, check out <span><a target="blank" href="https://github.com/KaticaKaja">github</a></span> down below for others</p>
                <p>You can contact me on <a href="https://www.linkedin.com/in/katica-rankovic-b01161188/">linkedIn</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
