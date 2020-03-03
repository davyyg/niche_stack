

@if ($paginator->hasPages())

    <div class="pull-right">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="btn btn-default disabled"><span>&laquo;</span></span>
        @else
            <span class="btn btn-default"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></span>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="disabled"><span>{{ $element }}</span></span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="btn btn-danger active"><span>{{ $page }}</span></span>
                    @else
                        <span class="btn btn-default"><a href="{{ $url }}">{{ $page }}</a></span>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <span class="btn btn-default"><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></span>
        @else
            <span class="btn btn-default disabled"><span>&raquo;</span></span>
        @endif
    </div>
@endif
