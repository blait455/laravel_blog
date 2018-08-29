@if ($paginator->hasPages())
    <div class="hide-for-small-only">
    <ul class="pagination">
         {{--Previous Page Link--}}
        @if ($paginator->onFirstPage())
            {{--<li class="arrow pager-prev unavailable"><a href="">«</a></li>--}}
        @else
            <li class="arrow pager-prev"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

         {{--Pagination Elements--}}
        @foreach ($elements as $element)
             {{--"Three Dots" Separator--}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

             {{--Array Of Links--}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="current"><a href="">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

         {{--Next Page Link--}}
        @if ($paginator->hasMorePages())
            <li class="arrow pager-next"><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            {{--<li class="arrow pager-next"><span>&raquo;</span></li>--}}
        @endif
    </ul>
    </div>
@endif


