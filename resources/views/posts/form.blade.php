        {!! Form::open(array('route'=>$routeArr,'method'=>"$method")) !!}
            <div class="row">
                <div class="col-md-10">
                    {{Form::label('title', 'Title', array('class' => ''))}}
                    {{Form::text('title', $post->title, array("class"=>"form-control","id"=>"title"))}}
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    {{Form::label('body', 'Description', array('class' => ''))}}
                    {{Form::textarea('body', $post->body,
                        array("class"=>"form-control","id"=>"body"))}}
                    <div class="invalid-feedback">
                        {{ $errors->first('body') }}
                    </div>
                </div>
            </div>
            <hr class="mb-4">
            {{Form::button('<i class="fa fa-star"></i> Save Post', array(
                'type' => 'submit',
                'class'=> 'btn btn-success',
            ))}}
        {{ Form::close() }}