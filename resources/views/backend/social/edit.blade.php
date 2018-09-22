@extends('backend.layout.main')

@section('title', 'Admin Blog | Edit Social Link Page')


@section('content')

    <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Social Page
                <small>Edit Social Link pgae</small>
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('social.index') }}"><i class="fa fa-list"></i> Social </a>
                </li>
                <li class="active">
                    Edit Page
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                {!! Form::model($social, [
                          'method' => 'PUT',
                          'route'  => ['social.update', $social->id],
                          'files'  => true,
                          'id'     => 'social-form'
                      ]) !!}

                @include('backend.social.form')

                {!! Form::close() !!}
            </div>
                <!-- /.box -->
    <!-- ./row -->
    </section>
    <!-- /.content -->
    </div>

@endsection

@include('backend.blog.script')