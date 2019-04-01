<?php $active_page = "about_page";?>
@extends("layouts.layout01",compact("active_page"))
@section("page_title","About Us");
@section("page_content")
    <div class="container">
        <h1 class="mt-5">About Us</h1>
        <p class="lead">I am a web developer</p>
    </div>
@endsection