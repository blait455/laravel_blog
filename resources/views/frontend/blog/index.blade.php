@extends('frontend.layout.main')

@section('content')
    <div class="row">
        <div class="columns">
            <div id="listingDiv" class="small-24 medium-24 large-24 columns p-0">
                @each('frontend.blog.partials.posts', $posts, 'post')
            </div>
        </div>
    </div>

    {{--pagination--}}
    @if($posts->hasPages())
        @include('frontend.layout.includes._partials._pagination')
    @endif

@endsection