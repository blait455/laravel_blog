@extends('frontend.layout.article')

@section('titleHeader')
    | {{ $post->title }}
@endsection

@section('blogHeader')
    {{ $post->title }}
@endsection

@section('content')
    <div class="clearfix">
        <div class="small-12 medium-14 large-12 columns text-left p-l-0">
            <div class="list-names">
                <strong>Guides Animals, Events, News</strong>
            </div>
            <span>
                <em>{{ $post->date }} | <a href="{{ route('author', $post->author->slug) }}"> {{ $post->author->name }} </a> </a></em>
            </span>
        </div>
        <div class="small-12 medium-10 large-12 columns text-right p-r-0">
            <div class="social-icons">
                <span>
                    <span class="m-r-10">Share:</span>
                    <a href="https://www.facebook.com/TheFridayAd" class="facebook" target="_blank" title="Facebook"></a>
                    <a href="https://twitter.com/thefridayad" class="twitter" target="_blank" title="Twitter"></a>
                </span>
            </div>
        </div>

        <div class="clearfix border-line-b"></div>
        <div class="clearfix p-b-10 m-b-10"></div>
        <img src="{{ $post->image }}">
        <p> {!! $post->body_html  !!} </p>
        <div class="clearfix p-b-10"></div>
        <div class="clearfix border-line-t"></div>

        {{-- avatar starts --}}
        <div class="small-24 medium-24 large-24 columns text-left p-l-0 p-r-0 m-b-40">
            <div class="medium-5 large-4 columns m-b-10">
                <div class="thumbnail">
                    <img src="https://foundation.zurb.com/sites/docs/assets/img/media-object/avatar-1.jpg">
                </div>
            </div>
            <div class="medium-19 large-20 columns">
                <h4>Dreams feel real while we're in them.</h4>
                <p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
            </div>

        </div>
        {{-- avatar ends --}}
    </div>





@endsection