<!doctype html>
<html class="no-js" lang="en">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1.0; maximum-scale=1.0; user-scalable=no;target-densityDpi=medium-dpi" />
    <link rel="stylesheet" type="text/css" href="http://static.friday-ad.co.uk/bundles/fafrontend/css/google-fonts.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @include('frontend.layout.includes._partials_articles.meta')
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TITLE">
    <meta name="twitter:description" content="META DESCRIPTION">
    <meta name="twitter:image" content="HEADER IMAGE">

    <title>Friday-Ad @yield('titleHeader')</title>
    <meta name="description" content="" />
    <link rel="stylesheet" href="{{ asset('frontend/css/compiled/main.css') }}"/>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('frontend/css/compiled/home.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/css/compiled/fa-main.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/css/compiled/fa-blog.css') }}"/>


    <!-- Optimizely code - to be commented out when not in use -->
    <script src="//cdn.optimizely.com/js/1704710245.js" async></script>
    <!-- GA code to switch to on live is UA-217484-2 for seo-->
    <script type='text/javascript' src='http://static.criteo.net/js/px.js?ch=1' async></script>
    <script type='text/javascript' src='http://static.criteo.net/js/px.js?ch=2' async></script>
</head>
<body>

<div id="fadBlog"><!-- Global ID -->
    {{--header with nav--}}
    @include('frontend.layout.includes._partials._menu')

    {{--TODO: Issue:1--}}
    <section class="bg" style="background-image: url('http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg')">
        {{--<img src="http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg">--}}
    </section>

    {{--<section class="clearfix">--}}
{{--<div>--}}
