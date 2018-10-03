@extends('backend.layout.main')

@section('title', 'Admin Blog | Add New Category')


@section('content')

    <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Site Address
                <small>Add new site address</small>
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('site-address.index') }}"><i class="fa fa-list"></i> Site Address </a>
                </li>
                <li class="active">
                    Add New Site Address
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                {!! Form::model($address, [
                          'method' => 'POST',
                          'route'  => 'site-address.store',
                          'files'  => true,
                          'id'     => 'site-form'
                      ]) !!}

                @include('backend.siteAddress.form')

                {!! Form::close() !!}
            </div>
                <!-- /.box -->
    <!-- ./row -->
    </section>
    <!-- /.content -->
    </div>

@endsection

@include('backend.siteAddress.script')