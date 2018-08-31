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
                <em>{{ $post->date }} | {{ $post->author->name }}</em>
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
        <div class="small-12 medium-14 large-12 columns text-left p-l-0 m-b-40">
            <div class="list-names">
                <strong>Guides Animals, Events, News</strong>
            </div>
            <span>
                <em>{{ $post->date }} | {{ $post->author->name }}</em>
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

    </div>

@endsection