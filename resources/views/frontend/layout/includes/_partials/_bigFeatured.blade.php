@if(isset($singleBanner))

@foreach($singleBanner as $banner)

<div class="row">
    <div class="columns">
        <div id="listingDiv" class="small-24 medium-24 large-24 columns" style="margin-top:-160px; padding: 0px;">
            <div class="listing featured arrow-hide">
                <a href="{{ route('blog.show', $banner->slug) }}" class="tricky-link">{{ $banner->title }}</a>
                <div class="featured-ribbon">featured</div>
                <div class="urgent-ribbon">urgent</div>
                <div class="clearfix">
                    <div class="small-24 medium-12 large-10 columns p-l-0">
                        <div class="clearfix">
                            <div class="p-l-30">
                                <div class="list-names">
                                    <strong><a href="{{ route('category', $banner->category->slug) }}">{{ $banner->category->title }}</a></strong>
                                </div>
                                <span class="list-hr-ago">
                                    {{ $banner->date }} | <a href="{{ route('author', $banner->author->slug) }}"> {{ $banner->author->name }} </a>
                                </span>
                            </div>
                            <h1 class="detail-head">{{ $banner->title }}</h1>
                            <div class="list-desc hide-for-small-only">
                                {{ $banner->excerpt }}
                            </div>
                            <div class="list-read-more">
                                <div class="list-read-more hide-for-small-only">Read more</div>
                            </div>
                        </div>
                    </div>
                    <div class="small-24 medium-12 large-14 columns p-r-0 f-mob-img">
                        <div class="clearfix">
                            @if(isset($banner->image))
                                <img src="{{ asset('images_blog/article') }}/{{ $banner->id }}/{{ $banner->image }}" alt="{{ $banner->image_alt }}">
                            @endif
                            <img data-interchange="http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
    @else

@endif