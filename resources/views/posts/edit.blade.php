<?php
      $active_page = "post_page";
      $method = "PUT";
      $formTitle = "Edit Post";
      $routeArr = array("post.update",$post->post_id);
?>
@extends("layouts.layout01",compact("active_page"))
@section("page_title","Edit Post")

@section("page_content")
    <div class="container">
        <div class="col-md-10 order-md-1">
            <h3 class="mt-1">{{$formTitle}}</h3>
            @include("posts.form",compact("post","method","routeArr"))
        </div>
    </div>

@endsection