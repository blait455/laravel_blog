{{--header--}}
@include('frontend.layout.includes.head')


{{-- artial Banner--}}
    @include('frontend.layout.includes._partials_single.artical_banner')

    <section class="clearfix">
        <div class="single-article-block">
            <div class="row">
                <div class="columns">
                    <div id="listingDiv" class="small-24 medium-24 large-24 columns p-0">
                        <h1 class="m-t-30 m-b-30">Competitions</h1>


                        <div class="listing featured arrow-hide">
                            <div class="clearfix">
                                <div class="small-24 medium-12 large-10 columns p-l-0">
                                    <div class="clearfix">
                                        <div>
                                            <div class="list-names">
                                                <strong>Guides Animals, Events, News</strong>
                                            </div>
                                            <span class="list-hr-ago">
                                                12 minutes ago | FridayAd
                                            </span>
                                        </div>
                                        <div class="list-fixed-ht">
                                            <h1 class="detail-head">A guide on how best to look after your dog</h1>
                                            <div class="list-desc hide-for-small-only">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                            </div>
                                        </div>
                                        <div class="list-read-more">Read more</div>
                                    </div>
                                </div>
                                <div class="small-24 medium-12 large-14 columns p-r-0 f-mob-img">
                                    <div class="clearfix list-article-img">
                                        <img src="http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    {{--pagination--}}
                    @include('frontend.layout.includes._partials._pagination')
                </div>
            </div>
        </div>


{{--footer top stories --}}
@include('frontend.layout.includes._partials._footerEdit')

{{-- footer --}}
@include('frontend.layout.includes.foot')