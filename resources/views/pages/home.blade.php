<?php $active_page = "home_page";?>
@extends("layouts.layout01",compact("active_page"))
@section("page_title","Basic Home Page");
@section("page_content")
    <div class="container">
        <h1 class="mt-5">Welcome To my Page</h1>
        <p class="lead">This is my Home Page</p>

    </div>
@endsection
