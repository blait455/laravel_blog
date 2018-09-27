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
                <strong><a href="{{ route('category', $post->category->slug) }}">{{ $post->category->title }}</a></strong>
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
        {{--<div class="clearfix p-b-10 m-b-10"></div>--}}
        @if(isset($post->image))
            <img src="{{ config('cms.asset_path') }}/images_blog/article/{{ $post->id }}/{{ $post->image }}" alt="{{ $post->image_alt }}">
        @endif
        {{--<p> {!! $post->body_html  !!} </p>--}}
        <p> {!! $post->body !!} </p>
        <div class="clearfix p-b-10"></div>
        <div class="clearfix border-line-t"></div>

        {{-- avatar starts --}}
        <div class="small-24 medium-24 large-24 columns text-left p-l-0 p-r-0 m-b-40">
            <div class="medium-5 large-4 columns m-b-10">
                <div class="thumbnail">
                    <img src= "{{ $post->author->gravatar() }}" alt="{{ $post->author->name }}">
                </div>
            </div>
            <div class="medium-19 large-20 columns">
                <h4><strong>Author : </strong>{{ $post->author->name }}</h4>
                <h5>Number of {{ str_plural('post', $post->author->posts()->published()->count()) }}: {{ $post->author->posts()->published()->count() }}</h5>
                <p>{!! $post->author->bio_html !!}</p>
            </div>

        </div>
        {{-- avatar ends --}}
    </div>


@endsection