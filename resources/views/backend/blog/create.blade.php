@extends('backend.layout.main')

@section('title', 'Admin Blog | Add NEw Post')


@section('content')

    <div class="content-wrapper">
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
                    <a href="{{ route('blog.index') }}"><i class="fa fa-list"></i> Blog </a>
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
                            'route'  => 'blog.store'
                        ]) !!}

                        <div class="form-group">
                            {!! Form::label('title') !!}
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('slug') !!}
                            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('excerpt') !!}
                            {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('body') !!}
                            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('published_at', 'Publish Date') !!}
                            {!! Form::text('published_at', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_id', 'Category') !!}
                            {!! Form::select('category_id', \App\Models\Category::pluck('title', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Choose category']) !!}
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
