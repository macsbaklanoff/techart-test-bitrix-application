<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif" data-entity="item"
    id="{{ $areaId }}">
    <div class="product-item-container" >
        <a href="{!! $item['DETAIL_PAGE_URL'] !!}" data-entity="image-wrapper">
            <img src="{{ $item['DETAIL_PICTURE']['SRC'] }}" class="{{ $block->elem('image') }}">
        </a>
        <p class="{{ $block->elem('title') }}">{{ $item['NAME'] }}</p>
        <div class="{{ $block->elem('price-block') }}" data-entity="price-block">
            <p class="{{ $block->elem('price') }}" id="{{ $areaId . '_price' }}">
                {!! $item['ITEM_PRICES'][0]['PRINT_PRICE'] !!}
            </p>
        </div>
        <div class="product-item-button-container" id="{{ $areaId . '_basket_actions' }}"
            data-entity="buttons-block">
            <a class="btn btn-default btn-md" id="{{ $areaId . '_buy_link' }}" rel="nofollow">
                В корзину
            </a>
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