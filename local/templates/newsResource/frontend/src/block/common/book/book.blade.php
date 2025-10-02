<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    <div class="product-item-container {{ $block->elem('product-item-container') }}" id="{{ $areaId }}">
        <div class="product-item {{ $block->elem('item-container') }}">
            <a class="{{ $block->elem('item-container__image') }}" href="{!! $item['DETAIL_PAGE_URL'] !!}"
                title="{{ $item['NAME'] }}" data-entity="image-wrapper">
                <span id="{{ $areaId . '_pict_slider'}}" style="display: none;" data-slider-interval="3000"
                    data-slider-wrap="true">
                </span>
                <span class="{{ $block->elem('item-container__image__pict') }}" id="{{ $areaId . '_pict'}}"
                    style="background-image: url('{{ $item['DETAIL_PICTURE']['SRC'] }}'); ">
                </span>
                <img class="{{ $block->elem('item-container__image__pict') }}" id="{{ $areaId . '_secondpict'}}"
                    src="{{ $item['DETAIL_PICTURE']['SRC'] }}" style="display: none;" />
                <div id="{{ $areaId . '_pict_slider_indicator'}}" style="display: none;">
                </div>
            </a>
            <div class="{{ $block->elem('item-container__title-container') }}">
                <a class="{{ $block->elem('item-container__title-container__title') }}"
                    href="{{ $item['DETAIL_PAGE_URL'] }}" title="{{ $item['NAME'] }}" style="font-size: {{ $fontSize }}">
                    {{ $item['NAME'] }}
                </a>
            </div>
            <div class="{{ $block->elem('item-container__price-container') }}" data-entity="price-block">
                <span class="{{ $block->elem('item-container__price-container__price') }}" id="{{ $areaId . '_price'}}" style="font-size: {{ $fontSize }}" >
                    {!! $item['ITEM_PRICES'][0]['PRINT_PRICE'] !!}
                </span>
            </div>

            <div class="bx-blue product-item-info-container product-item-hidden {{ $block->elem('product-item-info-container') }} " data-entity="buttons-block">
                <div class="product-item-button-container" class="{{ $block->elem('product-item-button-container') }}" id="{{ $areaId . '_basket_actions'}}">
                    <a class="btn btn-default btn-md" class="{{ $block->elem('button') }}" id="{{ $areaId . '_buy_link'}}" href="javascript:void(0)"
                        rel="nofollow">
                        В корзину </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        var {{ 'ob' . $areaId }} = new JCCatalogItem({
            'PRODUCT_TYPE': '{{ $item["CATALOG_TYPE"] }}',
            'SHOW_QUANTITY': false,
            'SHOW_ADD_BASKET_BTN': false,
            'SHOW_BUY_BTN': true,
            'SHOW_ABSENT': true,
            'SHOW_OLD_PRICE': false,
            'ADD_TO_BASKET_ACTION': 'ADD',
            'SHOW_CLOSE_POPUP': false,
            'SHOW_DISCOUNT_PERCENT': false,
            'DISPLAY_COMPARE': false,
            'BIG_DATA': false,
            'TEMPLATE_THEME': 'blue',
            'VIEW_MODE': 'CARD',
            'USE_SUBSCRIBE': false,
            'PRODUCT': {
                'ID': '{{ $item["ID"] }}',
                'NAME': '{{ $item["NAME"] }}',
                'DETAIL_PAGE_URL': '{{ $item["DETAIL_PAGE_URL"] }}',
                'PICT': {
                    'ID': '{{ $item["PREVIEW_PICTURE"]["ID"] }}',
                    'SRC': '{{ $item["PREVIEW_PICTURE"]["SRC"] }}',
                    'WIDTH': '{{ $item["PREVIEW_PICTURE"]["WIDTH"] }}',
                    'HEIGHT': '{{ $item["PREVIEW_PICTURE"]["HEIGHT"] }}'
                },
                'CAN_BUY': {{ $item["CAN_BUY"] ? 'true' : 'false' }},
                'CHECK_QUANTITY': false,
                'MAX_QUANTITY': '{{ $item["CATALOG_QUANTITY"] }}',
                'STEP_QUANTITY': '1',
                'QUANTITY_FLOAT': true,
                'ITEM_PRICE_MODE': '{!! $item["ITEM_PRICE_MODE"] !!}',
                'ITEM_PRICES': {!! json_encode($item["ITEM_PRICES"]) !!},
                'ITEM_PRICE_SELECTED': '{!! $item["ITEM_PRICE_SELECTED"] ?? "0" !!}',
                'ITEM_QUANTITY_RANGES': { 'ZERO-INF': { 'HASH': 'ZERO-INF', 'QUANTITY_FROM': '', 'QUANTITY_TO': '', 'SORT_FROM': '0', 'SORT_TO': 'INF' } },
                'ITEM_QUANTITY_RANGE_SELECTED': 'ZERO-INF',
                'ITEM_MEASURE_RATIOS': {!! json_encode($item["ITEM_MEASURE_RATIOS"] ?? []) !!},
                'ITEM_MEASURE_RATIO_SELECTED': '{!! $item["ITEM_MEASURE_RATIO_SELECTED"] ?? "0" !!}',
                'MORE_PHOTO': {!! json_encode($item["MORE_PHOTO"] ?? []) !!},
                'MORE_PHOTO_COUNT': '{{ $item["MORE_PHOTO_COUNT"] ?? "0" }}'
            },
            'BASKET': {
                'ADD_PROPS': true,
                'QUANTITY': 'quantity',
                'PROPS': 'prop',
                'EMPTY_PROPS': true,
                'BASKET_URL': '/books/basket.php',
                'ADD_URL_TEMPLATE': '/books/?action=ADD2BASKET&id=#ID#',
                'BUY_URL_TEMPLATE': '/books/?action=BUY&id=#ID#'
            },
            'VISUAL': {
                'ID': '{{ $areaId }}',
                'PICT_ID': '{{ $areaId . "_secondpict" }}',
                'PICT_SLIDER_ID': '{{ $areaId . "_pict_slider" }}',
                'QUANTITY_ID': '{{ $areaId . "_quantity" }}',
                'QUANTITY_UP_ID': '{{ $areaId . "_quant_up" }}',
                'QUANTITY_DOWN_ID': '{{ $areaId . "_quant_down" }}',
                'PRICE_ID': '{{ $areaId . "_price" }}',
                'PRICE_OLD_ID': '{{ $areaId . "_price_old" }}',
                'PRICE_TOTAL_ID': '{{ $areaId . "_price_total" }}',
                'BUY_ID': '{{ $areaId . "_buy_link" }}',
                'BASKET_PROP_DIV': '{{ $areaId . "_basket_prop" }}',
                'BASKET_ACTIONS_ID': '{{ $areaId . "_basket_actions" }}',
                'NOT_AVAILABLE_MESS': '{{ $areaId . "_not_avail" }}',
                'COMPARE_LINK_ID': '{{ $areaId . "_compare_link" }}',
                'SUBSCRIBE_ID': '{{ $areaId . "_subscribe" }}'
            },
            'PRODUCT_DISPLAY_MODE': 'N',
            'USE_ENHANCED_ECOMMERCE': 'N',
            'DATA_LAYER_NAME': 'dataLayer',
            'BRAND_PROPERTY': '',
            'IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED': false
        });
    </script>
</div>