
{{--@if(isset($post->image))--}}
    {{--<section class="bg" style="background-image: url('http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg')">--}}
        {{--<img src="{{ asset('images_blog/article') }}/{{ $post->id }}/{{ $post->image }}" alt="{{ $post->image_alt }}">--}}
    {{--</section>--}}

{{--@else--}}
    {{--<section class="bg" style="background-image: url('http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg')">--}}
        {{--<img src="http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg">--}}
    {{--</section>--}}
{{--@endif--}}

<section class="clearfix">
    <div>
<section class="clearfix">
    <div class="fad-Article-banner">
        <div class="row">
            <div class="columns">
                <div id="listingDiv" class="small-24 medium-14 large-10 columns p-0">
                    <div class="fad-Aban-text"><h1 class="banner-head">
                            @yield('blogHeader')
                    </h1></div>
                </div>
            </div>
        </div>
    </div>
</section>