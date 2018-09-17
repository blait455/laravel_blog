@extends('backend.layout.main')

@section('title', 'Admin Blog | Add New User')


@section('content')

    <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> User
                <small>Add new user</small>
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}"><i class="fa fa-list"></i> All Users </a>
                </li>
                <li class="active">
                    Add New User
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                {!! Form::model($user, [
                          'method' => 'POST',
                          'route'  => 'user.store',
                          'files'  => true,
                          'id'     => 'user-form'
                      ]) !!}

                @include('backend.user.form')

                {!! Form::close() !!}
            </div>
                <!-- /.box -->
    <!-- ./row -->
    </section>
    <!-- /.content -->
    </div>

@endsection

@include('backend.user.script')