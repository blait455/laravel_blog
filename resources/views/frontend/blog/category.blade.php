@extends('frontend.layout.category')

{{--showing category name in the title--}}
@section('titleHeader')
    | {{ $categoryName }}
@endsection

@section('content')
    <section class="clearfix">
        <div class="single-article-block">
            <div class="row">
                <div class="columns">
                    <div id="listingDiv" class="small-24 medium-24 large-24 columns p-0">

                        <h1 class="m-t-30 m-b-30">{{ $categoryName }}</h1>

                        @each('frontend.blog.partials.posts', $posts, 'post')

                        {{--pagination--}}
                        @if($posts->hasPages())
                            @include('frontend.layout.includes._partials._pagination')
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection