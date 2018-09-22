@extends('backend.layout.main')

@section('title', 'Admin Blog | Edit Account')


@section('content')

    <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Account
                <small>Edit Account</small>
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li class="active">
                    Edit Account
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                @include('backend._partials.message')
                {!! Form::model($user, [
                          'method' => 'PUT',
                          'route'  => ['admin.account.update', $user->id],
                          'id'     => 'user-form'
                      ]) !!}

                @include('backend.user.form', ['hideRoleDropdown' => true])

                {!! Form::close() !!}
            </div>
            <!-- /.box -->
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>

@endsection

@include('backend.category.script')