{{--header--}}
@include('frontend.layout.includes.head')


            {{-- Big Banner Add --}}
            @include('frontend.layout.includes._partials._bigFeatured')

            {{-- Threee featured --}}
            @include('frontend.layout.includes._partials._threeBannerFeatured')

            @yield('content')


        {{--footer top stories --}}
@include('frontend.layout.includes._partials._footerEdit')

   {{-- footer --}}
@include('frontend.layout.includes.foot')