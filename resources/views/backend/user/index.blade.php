@extends('backend.layout.main')

@section('title')
    Admin User | user index
@endsection


@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> User
                <small>Display All Users</small>
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('user.index') }}"><i class="fa fa-list"></i> User </a>
                </li>
                <li class="active">
                    All Users
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive">

                            {{--session message--}}
                            @include('backend._partials.message')

                            @if(empty($users))
                                <div class="alert alert-warning">
                                    <strong>No record found.</strong>
                                </div>
                            @else
                                @include('backend.user.include.table')

                        </div>
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-left">
                                {{ $users->appends( Request::query() )->render() }}
                            </ul>
                        </div>
                        @endif
                        <div class="pull-right">

                        </div>
                    </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>

            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>

@endsection
