
<div class="row">
    <div class="columns">
        <div id="listingDiv" class="small-24 medium-24 large-24 columns p-0">


                <div class="listing featured arrow-hide">
                    <div class="clearfix">
                        <div class="small-24 medium-12 large-10 columns p-l-0">
                            <div class="clearfix">
                                <div>
                                    <div class="list-names">
                                        <strong>Guides Animals, Events, News</strong>
                                    </div>
                                    <span class="list-hr-ago">
                                        {{ $post->date }} | {{ $post->author->name }}
                                    </span>
                                </div>
                                <h1 class="detail-head"><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h1>
                                <div class="list-desc hide-for-small-only">
                                    {!! $post->excerpt_html !!}
                                </div>
                                <div class="list-read-more"><a href="{{ route('blog.show', $post->slug) }}">Read more</a></div>
                            </div>
                        </div>
                        <div class="small-24 medium-12 large-14 columns p-r-0 f-mob-img">
                            <div class="clearfix">
                                <img src="{{ $post->image }}" class="img-responsive" alt="{{ $post->image_alt }}">
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
</div>
