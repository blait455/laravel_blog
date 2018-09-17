@extends('backend.layout.main')

@section('title', 'Admin Blog | Edit User')


@section('content')

    <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> User
                <small>Edit User</small>
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}"><i class="fa fa-list"></i> User </a>
                </li>
                <li class="active">
                    Edit User
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                {!! Form::model($user, [
                          'method' => 'PUT',
                          'route'  => ['user.update', $user->id],
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

@include('backend.category.script')