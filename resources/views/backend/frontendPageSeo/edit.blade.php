@extends('backend.layout.main')

@section('title', 'Admin Blog | Edit Post')


@section('content')

    <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Blog
                <small>Edit Post</small>
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('article.index') }}"><i class="fa fa-list"></i> Blog </a>
                </li>
                <li class="active">
                    Edit Post
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                {!! Form::model($seo, [
                          'method' => 'PUT',
                          'route'  => ['seo.update', $seo->id],
                          'files'  => true,
                          'id'     => 'seo-form'
                      ]) !!}

                @include('backend.frontendPageSeo.form')

                {!! Form::close() !!}
            </div>
                <!-- /.box -->
    <!-- ./row -->
    </section>
    <!-- /.content -->
    </div>

@endsection

@include('backend.blog.script')