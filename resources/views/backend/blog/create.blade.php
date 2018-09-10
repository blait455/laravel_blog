@extends('backend.layout.main')

@section('title', 'Admin Blog | Add NEw Post')


@section('content')

    <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Blog
                <small>Add new post</small>
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('post.index') }}"><i class="fa fa-list"></i> Blog </a>
                </li>
                <li class="active">
                    Add New Post
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">

                        {!! Form::model($post, [
                            'method' => 'POST',
                            'route'  => 'post.store',
                            'files'  => true
                        ]) !!}

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
                            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                            @if($errors->has('body')) <span class="help-block">{{$errors->first('body')}}</span> @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('published_at', 'Publish Date') !!}
                            {!! Form::text('published_at', null, ['class' => 'form-control']) !!}
                            {{--@if($errors->has('published_at')) <span class="help-block">{{$errors->first('published_at')}}</span> @endif--}}
                        </div>
                        <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                            {!! Form::label('category_id', 'Category') !!}
                            {!! Form::select('category_id', \App\Models\Category::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}
                            @if($errors->has('category_id')) <span class="help-block">{{$errors->first('category_id')}}</span> @endif
                        </div>
                        <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                            {!! Form::label('image', 'Feature Image') !!}
                            {!! Form::file('image') !!}
                            @if($errors->has('image')) <span class="help-block">{{$errors->first('image')}}</span> @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('image_alt', 'Image Alt') !!}
                            {!! Form::text('image_alt', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('featured', 'Featured Post') !!}
                            {!! Form::checkbox('featured', null, false) !!}
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
                            {!! Form::checkbox('no_index', null, false) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('no_follow') !!}
                            {!! Form::checkbox('no_follow', null, false) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('top_content') !!}
                            {!! Form::checkbox('top_content', null, false) !!}
                        </div>

                         {!! Form::submit('Create new post', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                    <!-- /.box-body -->
            </div>
                <!-- /.box -->
    <!-- ./row -->
    </section>
    <!-- /.content -->
    </div>

@endsection

@section('script')
    <script type="text/javascript">

        $('#title').on('blur', function(){
             var theTitle = this.value.toLowerCase().trim(),
                 slugInput = $('#slug'),
                 theSlug = theTitle.replace(/&/g, '-and-')
                     .replace(/[^a-z0-9-]+/g, '-')
                     .replace(/\-\-+/g, '-')
                     .replace(/^-+|-+$/g, '');

             slugInput.val(theSlug);
        });

        // var simplemde1 = new SimpleMDE({ element: $("#excerpt")[0] });
        var simplemde = new SimpleMDE({ element: $("#body")[0] });

    </script>
@endsection
