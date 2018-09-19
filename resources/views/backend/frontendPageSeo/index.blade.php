@extends('backend.layout.main')

@section('title')
    Admin Blog | SEO index
@endsection


@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Blog
                <small>Display All SEO Pages</small>
            </h1>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('article.index') }}"><i class="fa fa-list"></i> Blog </a>
                </li>
                <li class="active">
                    All SEO Pages
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
                                {{--<a id="add-button" title="Add New" class="btn btn-success" href="{{ route('seo.create') }}"><i class="fa fa-plus-circle"></i> Add New</a>--}}
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

                            @if(empty($seos))
                                <div class="alert alert-warning">
                                    <strong>No record found.</strong>
                                </div>
                            @else
                                @include('backend.frontendPageSeo.include.table')

                        </div>
                        <div class="box-footer clearfix">
                            <ul class="pagination pagination-sm no-margin pull-left">
                                {{ $seos->appends( Request::query() )->render() }}
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
