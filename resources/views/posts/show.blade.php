<?php $active_page = "post_page";?>
@extends("layouts.layout01",compact("active_page"))
@section("page_title","Post Listing");
@section("page_content")
    <div class="container">

        <h1>{{$post->title}}</h1>
        <div class="row">
            <div class="col-md-8">
                {{$post->body}}
            </div>
            <div class="col-md-4">
                <div class="well bg-light">
                    <dl class="dl-horizontal">
                        <dt>&nbsp;&nbsp;Created At</dt>
                        <dd>&nbsp;&nbsp;{{$post->created_at}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>&nbsp;&nbsp;Updated At</dt>
                        <dd>&nbsp;&nbsp;{{$post->updated_at}}</dd >
                    </dl>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{ route('post.edit',$post->slug) }}" class="btn btn-primary btn-block">Edit</a>
                        </div>
                        <div class="col-sm-6">
                            {{ Form::open(array("route" => array("post.destroy",$post->slug),'method'=>'delete')) }}
                            {!! Form::submit("Delete", ["class"=>"btn btn-danger btn-block"]) !!}
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection