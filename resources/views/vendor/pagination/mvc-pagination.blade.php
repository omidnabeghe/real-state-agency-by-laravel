<div class="row mt-5">
    <div class="col text-center">
        <div class="block-27">
            <ul>
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        @else
                    <li><a href="{{ $paginator->previousPageUrl() }}">&lt;</a></li>
                @endif
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
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
                        <li><a aria-label="@lang('pagination.next')" href="{{ $paginator->nextPageUrl() }}">&gt;</a></li>
                    </li>
                    @else
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">

                    </li>

                        @endif



            </ul>
        </div>
    </div>
</div>
