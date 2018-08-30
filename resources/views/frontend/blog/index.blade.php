@extends('frontend.layout.main')

@section('content')

    @each('frontend.blog.partials.blogs', $posts, 'post')

    {{--pagination--}}
    @if($posts->hasPages())
        @include('frontend.layout.includes._partials._pagination')
    @endif

@endsection