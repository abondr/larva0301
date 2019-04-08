<?php $active_page = "post_page";?>
@extends("layouts.layout01",compact("active_page"))
@section("page_title","Post Listing");
@section("page_content")
    <div class="container">
        <div class='row'>
            <div class='col-md-10'>
                    <h1>All Posts</h1>
            </div>
            <div class='col-md-2'>
                    <a href="{{ route('post.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create</a>
            </div>
        </div>
        <div class='row'>
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
                    <tr><td colspan=5>{!! $posts->links() !!}</td></tr>
                </tbody>
            </table>
        </div>
        
    </div>
@endsection