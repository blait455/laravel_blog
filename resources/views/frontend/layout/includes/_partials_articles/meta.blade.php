@php
   $routeName = Route::currentRouteName();
@endphp
@if($routeName === 'blog.show')
    @if(isset($post))
        <meta property="og:title" content="{{ $post->title }}" />
        <meta property="og:type" content="article" />
        <meta name="author" content="{{ $post->author->name }}">
        <meta property="og:image" content="{{ $post->image }}" />
        <meta property="og:url" content="{{ $post->slug }}" />
        <meta property="og:description" content="{{ $post->meta_description }}" />
        <link rel="canonical" href="{{ $post->canonical_url }}" />
        <meta http-equiv="refresh" content="{{ $post->redirect_url }}" />
        <meta name="ROBOTS" content="{{ ($post->no_index) ? 'index' : 'noindex'}}">
        <META NAME="ROBOTS" CONTENT="{{ ($post->no_index) ? 'follow' : 'nofollow'}}">
        <META NAME="ROBOTS" CONTENT="{{ ($post->top_content) ? 'topcontent' : ''}}">
    @endif

@elseif ($routeName === 'home')

    <meta property="og:title" content="{{ $pagesSeo[0]->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="{{ $pagesSeo[0]->image }}" />
    <meta property="og:url" content="{{ $pagesSeo[0]->slug }}" />
    <meta property="og:description" content="{{ $pagesSeo[0]->meta_description }}" />
    <link rel="canonical" href="{{ $pagesSeo[0]->canonical_url }}" />
    <meta http-equiv="refresh" content="{{ $pagesSeo[0]->redirect_url }}" />
    <meta name="ROBOTS" content="{{ ($pagesSeo[0]->no_index) ? 'index' : 'noindex'}}">
    <META NAME="ROBOTS" CONTENT="{{ ($pagesSeo[0]->no_index) ? 'follow' : 'nofollow'}}">
    <META NAME="ROBOTS" CONTENT="{{ ($pagesSeo[0]->top_content) ? 'topcontent' : ''}}">

@elseif ($routeName === 'author')

    <meta property="og:title" content="{{ $categoryName }}" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="{{ $pagesSeo[1]->image }}" />
    <meta property="og:url" content="{{ $pagesSeo[1]->slug }}" />
    <meta property="og:description" content="{{ $pagesSeo[1]->meta_description }}" />
    <link rel="canonical" href="{{ $pagesSeo[1]->canonical_url }}" />
    <meta http-equiv="refresh" content="{{ $pagesSeo[1]->redirect_url }}" />
    <meta name="ROBOTS" content="{{ ($pagesSeo[1]->no_index) ? 'index' : 'noindex'}}">
    <META NAME="ROBOTS" CONTENT="{{ ($pagesSeo[1]->no_index) ? 'follow' : 'nofollow'}}">
    <META NAME="ROBOTS" CONTENT="{{ ($pagesSeo[1]->top_content) ? 'topcontent' : ''}}">

@elseif ($routeName === 'category')

    <meta property="og:title" content="{{ $categoryName }}" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="{{ $pagesSeo[2]->image }}" />
    <meta property="og:url" content="{{ $pagesSeo[2]->slug }}" />
    <meta property="og:description" content="{{ $pagesSeo[2]->meta_description }}" />
    <link rel="canonical" href="{{ $pagesSeo[2]->canonical_url }}" />
    <meta http-equiv="refresh" content="{{ $pagesSeo[2]->redirect_url }}" />
    <meta name="ROBOTS" content="{{ ($pagesSeo[2]->no_index) ? 'index' : 'noindex'}}">
    <META NAME="ROBOTS" CONTENT="{{ ($pagesSeo[2]->no_index) ? 'follow' : 'nofollow'}}">
    <META NAME="ROBOTS" CONTENT="{{ ($pagesSeo[2]->top_content) ? 'topcontent' : ''}}">

@endif
