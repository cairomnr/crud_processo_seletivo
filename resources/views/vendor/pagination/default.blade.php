@if ($paginator->hasPages())
    <ul class="pagination">

        @php
            $urls = $elements[0];
            $first_url = $urls[1];
            $last_url = $urls[count($urls)];
        @endphp

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>&laquo;&laquo;</span></li>
            <li class="disabled"><span>&laquo;</span></li>
        @else
            <li><a href="{{ $first_url }}"><span>&laquo;&laquo;</span></a></li>
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
            <li><a href="{{ $last_url }}"><span>&raquo;&raquo;</span></a></li>
        @else
            <li class="disabled"><span>&raquo;</span></li>
            <li class="disabled"><span>&raquo;&raquo;</span></li>
        @endif
    </ul>
@endif
