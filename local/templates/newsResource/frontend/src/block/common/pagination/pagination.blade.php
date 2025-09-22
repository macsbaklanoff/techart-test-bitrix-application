<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    @for($i = 0; $i < $countVisiblePages; $i++)
        <a href="{{ $hrefFromPagination . $i + 1 }}" class="{{ $currentPage == $i + 1 || ($currentPage > $countVisiblePages && $i == 2)
            ? $block->elem('item')->mod('current') : $block->elem('item')}}">
            {{ $currentPage > $countVisiblePages && $i + 1 == $countVisiblePages ? $currentPage : $i + 1 }}
        </a>
    @endfor
    @if ($countVisiblePages > 1)
        <a href="{{ $hrefFromPagination . $currentPage + 1 }}"
            class="{{ ($currentPage * $countItemsPage) >= $totalCountNews ? $block->elem('none-item') : $block->elem('next')}}">
            <img class="{{ $block->elem('arrow-next-page') }}" src="/upload/icons/arrow-next-page.png">
        </a>
    @endif
</div>