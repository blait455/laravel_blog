{{--header--}}
@include('frontend.layout.includes.head')

{{-- artial Banner--}}
@include('frontend.layout.includes._partials_single.artical_banner')


    <section class="clearfix">
        <div>
            <div class="row">
                <div class="">
                    <div class="small-24 medium-16 large-16 columns m-t-30">
                        <div class="">
                            @yield('content')
                        </div>
                    </div>

                    {{-- sidebar --}}
                    @include('frontend.layout.includes._partials_articles.sidebar')
                </div>
            </div>
        </div>
    </section>



{{-- footer --}}
@include('frontend.layout.includes.foot')