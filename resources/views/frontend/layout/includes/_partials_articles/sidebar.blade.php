<!-- Related Ads Desktop view -->
<div class="small-24 medium-8 large-8 columns m-t-30">
    <div class="hide-for-small-only">
        <h2 class="m-b-10">Related ads</h2>
        <div class="listing-ads featured">
            <div class="clearfix">
                <div class="small-24 medium-24 large-24 columns p-l-0 p-r-0">
                    <div class="clearfix">
                        <img data-interchange="[http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg, (small)], [http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg, (medium)], [http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg, (large)]" class="img-responsive">
                    </div>
                    <div class="clearfix listing-ads-box">
                        <h3 class="green-color">$25</h3>
                        <h3>A guide on how best to look after your dog</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="hide-for-small-only">
        <h2 class="m-b-10">Related articles</h2>

        @foreach($popularPosts as $popularPost)
            <div class="listing featured">
                <div class="clearfix">
                    <div class="small-24 medium-24 large-24 columns p-l-0 p-r-0">
                        <div class="clearfix">
                            <img src="{{ $popularPost->image }}" class="img-responsive" alt="{{ $popularPost->image_alt }}">
                        </div>
                        <div class="clearfix">
                            <div class="m-b-10 m-t-10">
                                <div class="list-names">
                                    <strong>Events, Weddings</strong>
                                </div>
                                <span class="list-hr-ago">
                                    {{ $popularPost->date }} | <a href="{{ route('author', $popularPost->author->slug) }}"> {{ $popularPost->author->name }} </a>
                                </span>
                            </div>
                            <h2 class="m-b-10"><a href="{{ route('blog.show', $popularPost->slug) }}">{{ $popularPost->title }}</a></h2>
                            <div class="list-desc">
                                {!! $popularPost->excerpt_html !!}
                            </div>
                            <div class="list-read-more"><a href="{{ route('blog.show', $popularPost->slug) }}">Read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

</div>
