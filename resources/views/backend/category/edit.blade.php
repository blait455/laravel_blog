@extends('backend.layout.main')

@section('title', 'Admin Blog | Edit Category')


@section('content')

    <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Category
                <small>Edit Category</small>
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}"><i class="fa fa-list"></i> Category </a>
                </li>
                <li class="active">
                    Edit Category
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                {!! Form::model($category, [
                          'method' => 'PUT',
                          'route'  => ['category.update', $category->id],
                          'files'  => true,
                          'id'     => 'category-form'
                      ]) !!}

                @include('backend.category.form')

                {!! Form::close() !!}
            </div>
                <!-- /.box -->
    <!-- ./row -->
    </section>
    <!-- /.content -->
    </div>

@endsection

@include('backend.category.script')