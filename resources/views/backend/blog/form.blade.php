<div class="col-xs-9">
    <div class="box">
        <div class="box-body">

            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                {!! Form::label('title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                @if($errors->has('title')) <span class="help-block">{{$errors->first('title')}}</span> @endif
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                {!! Form::label('slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                @if($errors->has('slug')) <span class="help-block">{{$errors->first('slug')}}</span> @endif
            </div>
            <div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
                {!! Form::label('excerpt') !!}
                {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
                @if($errors->has('excerpt')) <span class="help-block">{{$errors->first('excerpt')}}</span> @endif
            </div>
            <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                {!! Form::label('body') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control my-editor']) !!}
                @if($errors->has('body')) <span class="help-block">{{$errors->first('body')}}</span> @endif
            </div>
            <div class="form-group">
                {!! Form::label('image_alt', 'Image Alt') !!}
                {!! Form::text('image_alt', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('featured', 'Featured Post') !!}
                {!! Form::checkbox('featured', null, ($post->exists) ? $post->featured : false ) !!}
                <span class="help-block">If chosen it will be under featured image</span>
            </div>
            <hr><h3><strong>SEO</strong></h3><br>
            <div class="form-group">
                {!! Form::label('meta_description') !!}
                {!! Form::text('meta_description', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('canonical_url') !!}
                {!! Form::text('canonical_url', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('redirect_url') !!}
                {!! Form::text('redirect_url', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('no_index') !!}
                {!! Form::checkbox('no_index', null, ($post->exists) ? $post->no_index : false) !!}
            </div>
            <div class="form-group">
                {!! Form::label('no_follow') !!}
                {!! Form::checkbox('no_follow', null, ($post->exists) ? $post->no_follow : false) !!}
            </div>
            <div class="form-group">
                {!! Form::label('top_content') !!}
                {!! Form::checkbox('top_content', null, ($post->exists) ? $post->top_content : false) !!}
            </div>

        </div>
    </div>
</div>

<div class="col-xs-3">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Publish</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                {!! Form::label('published_at', 'Publish Date') !!}
                <div class='input-group date' id='datetimepicker1'>
                    {!! Form::text('published_at', null, ['class' => 'form-control']) !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="box-footer clearfix">
            <div class="pull-left">
                {{--<a id="draft-btn" href="#" class="btn btn-default">Save Draft</a>--}}

                <a id="draft-btn" name="draft" href="#" onclick="clickHandler()" class="btn btn-default">Save Draft</a>
                <input type="hidden" name="draft" id="draft" value=""/>

            </div>
            <div class="pull-right">
                {!! Form::submit('Publish', ['class' => 'btn btn-primary', 'value' => true]) !!}
            </div>
        </div>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Category</h3>
        </div>
        <div class="box-body">
            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                {!! Form::select('category_id', \App\Models\Category::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}
                @if($errors->has('category_id')) <span class="help-block">{{$errors->first('category_id')}}</span> @endif
            </div>
        </div>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Featured Image</h3>
        </div>
        <div class="box-body text-center">
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">

                        <img src="{{ ($post->image) ? asset('images_blog').'/'.$post->id.'/'.$post->image : 'http://placehold.it/200x150text=No+Image' }}" alt="...">

                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                    <div>
                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>{!! Form::file('image') !!}</span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
                </div>

                @if($errors->has('image')) <span class="help-block">{{$errors->first('image')}}</span> @endif
            </div>
        </div>
    </div>

</div>