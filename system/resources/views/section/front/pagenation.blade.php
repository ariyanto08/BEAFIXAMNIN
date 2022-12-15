
<!-- resources/views/vendor/pagination/custom.blade.php -->

@if ($paginator->hasPages())
    <div class="themesflat-pagination clearfix">
        <ul>
            @if ($paginator->onFirstPage())
                <li>
                    <a class="page-numbers prev" href="#" tabindex="-1"><span class="fa fa-angle-left"></a>
                </li>
            @else
                <li><a class="page-numbers" href="{{ $paginator->previousPageUrl() }}">
                        <span class="fa fa-angle-left"></a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <a class="page-numbers current">{{ $page }}</a>
                            </li>
                        @else
                            <li>
                                <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-numbers next" href="{{ $paginator->nextPageUrl() }}" rel="next"><span
                            class="fa fa-angle-right"></span></a>
                </li>
            @else
                <li class="page-item disabled">
                    <a a href="#" class="page-numbers" href="#"><span class="fa fa-angle-right"></span></a>
                </li>
            @endif
        </ul>
    </div>
@endif

</html>
