<?php
    $active_page = "post_page";
    $method="POST";
    $formTitle = "Create Post";
    $routeArr = array("post.store")
?>
@extends("layouts.layout01",compact("active_page"))
@section("page_title","Create Post")

@section("page_content")
    <div class="container">
        <div class="col-md-10 order-md-1">
            <h3 class="mt-1">{{$formTitle}}</h3>
            @include("posts.form",compact("post","method","routeArr"))
        </div>
    </div>
@endsection