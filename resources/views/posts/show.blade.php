<?php $active_page = "post_page";?>
@extends("layouts.layout01",compact("active_page"))
@section("page_title","Post Listing");
@section("page_content")
    <div class="container">
        <h1 class="mt-5">{{$post->title}}</h1>

    </div>
@endsection