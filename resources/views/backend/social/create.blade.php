@extends('backend.layout.main')

@section('title', 'Admin Blog | Add New Social Link')


@section('content')

    <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Social Link
                <small>Add new social link</small>
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('social.index') }}"><i class="fa fa-list"></i> Social Links </a>
                </li>
                <li class="active">
                    Add New Social Link
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                {!! Form::model($social, [
                          'method' => 'POST',
                          'route'  => 'social.store',
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