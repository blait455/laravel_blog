{{--header--}}
@include('frontend.layout.includes.head')


            {{-- Big Banner Add --}}
            @include('frontend.layout.includes._partials._bigFeatured')

            {{-- Threee featured --}}
            @include('frontend.layout.includes._partials._threeBannerFeatured')

            <div class="row">
                <div class="columns">
                    <div id="listingDiv" class="small-24 medium-24 large-24 columns p-0">

                        @foreach($posts as $post)

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
                                            <h1 class="detail-head">{{ $post->title }}</h1>
                                            <div class="list-desc hide-for-small-only">
                                                {{ $post->excerpt }}
                                            </div>
                                            <div class="list-read-more">Read more</div>
                                        </div>
                                    </div>
                                    <div class="small-24 medium-12 large-14 columns p-r-0 f-mob-img">
                                        <div class="clearfix">
                                            <img src="{{ $post->image }}" class="img-responsive" alt="{{ $post->image_alt }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach


                        {{--pagination--}}
                        @include('frontend.layout.includes._partials._pagination')

                    </div>
                </div>
            </div>


        {{--footer top stories --}}
@include('frontend.layout.includes._partials._footerEdit')

   {{-- footer --}}
@include('frontend.layout.includes.foot')