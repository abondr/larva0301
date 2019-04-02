<?php $active_page = "contact_page";?>
@extends("layouts.layout01",compact("active_page"))
@section("page_title","Contact Us");
@section("page_content")
    <div class="container">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Contact Us</h4>
        {{ Form::open(array('route' => 'page.contact.post',
        'method' => 'post',"class" => "needs-validation","novalidate"=>"")) }}
            <!--form class="needs-validation" novalidate-->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        {{Form::label('fname', 'First Name', array('class' => ''))}}
                        {{Form::text('fname', $contact->fname,
                            array("class"=>"form-control","id"=>"fame"))}}
                        <div class="bg-warning text-danger">
                            {{ $errors->first('fname') }}
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        {{Form::label('lname', 'Last Name', array('class' => ''))}}
                        {{Form::text('lname', $contact->lname,
                            array("class"=>"form-control","id"=>"lame"))}}
                        <div class="bg-warning text-danger">
                            {!! $errors->first('lname') !!}
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    {{Form::label('email', 'Email', array('class' => ''))}}
                    {{Form::text('email', $contact->email,
                            array("class"=>"form-control","id"=>"email"))}}
                    <div class="bg-warning text-danger">
                        {!! $errors->first('email') !!}
                    </div>
                </div>

            <div class="mb-3">
                {{Form::label('contact_number', 'Contact Number', array('class' => ''))}}
                {{Form::text('contact_number', $contact->contact_number,
                        array("class"=>"form-control","id"=>"contact_number"))}}
                <div class="bg-warning text-danger">
                    {!! $errors->first('contact_number') !!}
                </div>
            </div>

            <div class="mb-3">
                {{Form::label('message', 'Message', array('class' => ''))}}
                {{Form::textarea('message', $contact->message,
                        array("class"=>"form-control","id"=>"message"))}}
                <div class="bg-warning text-danger">
                    {!! $errors->first('message') !!}
                </div>
            </div>

                <hr class="mb-4">
                {{Form::button('<i class="fa fa-star"></i> Submit Message', array(
                    'type' => 'submit',
                    'class'=> 'btn btn-success',
                ))}}

            {{ Form::close() }}
        </div>
    </div>
    </div>
@endsection