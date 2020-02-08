<div class="paginationBox">
  <div class="inPaginationBox">
@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span aria-hidden="true">&lsaquo;</span>
            </li>
        @else
            {{-- <li>
                <a href="{{ $paginator->url(1) }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;&lsaquo;</a>
            </li> --}}
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                {{-- @foreach ($element as $page => $url)

                    @if ($page == $paginator->currentPage())
                        <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach --}}
                @php
                  $start = $paginator->currentPage()-3 <= 1 ? 1 : $paginator->currentPage()-3;

                  if($start <= 3){
                    $num =  7 - $start;
                  }else{
                    $num = 3;
                  }
                  
                  $end = $paginator->currentPage()+$num >= $paginator->lastPage() ? $paginator->lastPage() : $paginator->currentPage()+$num;

                  $urlRange = $paginator->getUrlRange($start, $end);
                  \Debugbar::info($urlRange);
               @endphp

               @foreach($urlRange as $page => $url)
                 @if ($page == $paginator->currentPage())
                     <li aria-current="page"><span class="active">{{ $page }}</span></li>
                 @else
                     <li><a href="{{ $url }}">{{ $page }}</a></li>
                 @endif
               @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
        @else
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">&rsaquo;</span>
            </li>
        @endif
    </ul>
@endif
  </div>
</div>
