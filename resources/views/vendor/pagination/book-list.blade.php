@if ($paginator->hasPages())
    <div class="d-flex justify-content-between flex-fill d-sm-none">
        <nav aria-label="Blog Pagination">
            <ul class="pagination style-1 p-t20">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">@lang('pagination.previous')</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}"
                           rel="prev">@lang('pagination.previous')</a>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}"
                           rel="next">@lang('pagination.next')</a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">@lang('pagination.next')</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>

    <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
        <div class="col-md-6">
            <p class="page-text">
                {!! __('Showing') !!} {{ $paginator->firstItem() }} {!! __('to') !!} {{ $paginator->lastItem() }} {!! __('of') !!} {!! __('results') !!}</p>
        </div>

        <div class="col-md-6">
            <nav aria-label="Blog Pagination">
                <ul class="pagination style-1 p-t20">
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled"><a class="page-link prev" href="javascript:void(0);">Prev</a>
                        </li>
                    @else
                        <li class="page-item"><a class="page-link prev"
                                                 href="{{ $paginator->previousPageUrl() }}">Prev</a>
                        </li>
                    @endif

                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0);">{{ $element }}</a>
                            </li>
                        @endif
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item">
                                        <a class="page-link active" href="javascript:void(0);">{{ $page }}</a>
                                    </li>
                                @else
                                    <li class="page-item ">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    @if ($paginator->hasMorePages())
                        <li class="page-item"><a class="page-link next" href="{{ $paginator->nextPageUrl() }}">Next</a>
                        </li>
                    @else
                        <li class="page-item disabled"><a class="page-link next" href="javascript:">Next</a></li>
                    @endif

                </ul>
            </nav>
        </div>
    </div>
@endif
