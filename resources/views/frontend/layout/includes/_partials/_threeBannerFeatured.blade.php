@if(isset($threeBanner))

<div class="row">

    @foreach($threeBanner as $banner)
    <div class="small-24 medium-8 large-8 columns">
        <div class="listing featured mob-latest-ariticles">
            <a href="{{ route('blog.show', $banner->slug) }}" class="tricky-link">{{ $banner->title }}</a>
            <div class="featured-ribbon">featured</div>
            <div class="urgent-ribbon">urgent</div>
            <div class="clearfix">
                <div class="small-10 medium-24 large-24 columns p-l-0 p-r-0">
                    <div class="clearfix">
                        @if(isset($banner->image))
                            <img src="{{ config('cms.asset_path') }}/images_blog/article/{{ $banner->id }}/{{ $banner->image }}" alt="{{ $banner->image_alt }}">
                        @endif
                        {{--<img data-interchange="[http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg, (small)], [http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg, (medium)], [http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg, (large)]" class="img-responsive">--}}
                    </div>
                </div>
                <div class="small-14 medium-24 large-24 columns p-l-0 p-r-0">
                    <div class="clearfix">
                        <div class="m-b-10 m-t-10 hide-for-small-only">
                            <div class="list-names">
                                <strong><a href="{{ route('category', $banner->category->slug) }}">{{ $banner->category->title }}</a></strong>
                            </div>
                            <span class="list-hr-ago">
                               {{ $banner->date }} | <a href="{{ route('author', $banner->author->slug) }}"> {{ $banner->author->name }} </a>
                            </span>
                        </div>
                        <h2 class="m-b-10">{{ $banner->title }}</h2>
                        <div class="list-desc hide-for-small-only">
                            {{ $banner->excerpt }}
                        </div>
                        <div class="list-read-more hide-for-small-only">Read more</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endif