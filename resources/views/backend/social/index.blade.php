@extends('backend.layout.main')

@section('title')
    Admin Blog | Social Links index
@endsection


@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Social
                <small>Display All Social Links</small>
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('social.index') }}"><i class="fa fa-list"></i> Social </a>
                </li>
                <li class="active">
                    All Social Links
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="pull-left">
                                <a id="add-button" title="Add New" class="btn btn-success" href="{{ route('social.create') }}"><i class="fa fa-plus-circle"></i> Add New Social Link</a>
                            </div>
                            <div class="pull-right">
                                <form accept-charset="utf-8" method="post" class="form-inline" id="form-filter" action="#">
                                    <div class="input-group">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive">

                            {{--session message--}}
                            @include('backend._partials.message')

                            @if(empty($socials))
                                <div class="alert alert-warning">
                                    <strong>No record found.</strong>
                                </div>
                            @else
                                @include('backend.social.include.table')

                        </div>
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-left">
                                {{ $socials->appends( Request::query() )->render() }}
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
