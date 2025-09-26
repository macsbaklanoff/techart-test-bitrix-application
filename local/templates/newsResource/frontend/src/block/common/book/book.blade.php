<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif" data-entity="item"
     id="{{ $areaId }}" >
    <a href="{!! $item['DETAIL_PAGE_URL'] !!}">
        <img src="{{ $item['DETAIL_PICTURE']['SRC'] }}" class="{{ $block->elem('image') }}">
    </a>
    <p class="{{ $block->elem('title') }}">{{ $item['NAME'] }}</p>
    <p class="{{ $block->elem('price') }}">{!! $item['ITEM_PRICES'][0]['PRINT_PRICE'] !!}</p>
    <a id="{{ $areaId . '_buy_link' }}" rel="nofollow">
        В корзину
    </a>
</div>