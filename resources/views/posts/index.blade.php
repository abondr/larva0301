<?php $active_page = "post_page";?>
@extends("layouts.layout01",compact("active_page"))
@section("page_title","Post Listing");
@section("page_content")
    <div class="container">
        <h1 class="mt-5">Post Listings</h1>
        <table class='table table-striped table-sm'>
            <thead class='thead-dark'>
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ substr($post->body,0,100) }}</td>
                    <td><a href='{{ URL::to("/post/".$post->slug) }}' class='btn btn-warning btn-block'>Details</a></td>
                </tr>
            @endforeach
            <tr><td colspan=5>{{ $posts->links() }}</td></tr>
            </tbody>
        </table>
    </div>
@endsection