@extends('frontend.layout.category')

{{--showing category name in the title--}}

@section('content')
    <section class="clearfix">
        <div class="single-article-block">
            <div class="row">
                <div class="columns">
                    <div id="listingDiv" class="small-24 medium-24 large-24 columns p-0">

                        <section class="bg error-parent-block" style="background-color: #000000;">
                            <div class="fad-Article-banner  error-child-block">
                                <div class="row">
                                    <div class="columns">
                                        <div class="small-24 medium-24 large-24 columns p-0">
                                            <div class="text-center">
                                                <h1 class="error_404">{{ $statusCode }}</h1>
                                                <h1 class="error_head">This page can't be found...</h1>
                                                <h2 class="subhead">...{{ $statusMessage }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="clearfix">
                            <div class="homepage-row p-t-20 white-bg">
                                <div class="row">
                                    <div class="large-24 columns text-center m-t-20">
                                        <div><a href="{{ route('home') }}" type="button" class="button button-default">Return To Main Page</a> </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


