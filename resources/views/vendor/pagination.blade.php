@if ($paginator->hasPages())
    <nav class="navigation pagination" role="navigation">
        <h2 class="screen-reader-text">文章导航</h2>
        <div class="nav-links">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}">
                <i class="text-md iconfont icon-arrowleft"></i>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="page-numbers dots">…</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span aria-current="page" class="page-numbers current">{{ $page }}</span>
                    @else
                        <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}">
                <i class="text-md iconfont icon-arrowright"></i>
            </a>
        @endif
        </div>
    </nav>
@endif