<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif" id="{{ $itemIds['ID'] }}" >
    <div class="{{ $block->elem('title-container') }}">
        <h1 class="{{ $block->elem('title-container__title') }}">
            {{ $name }}
        </h1>
    </div>
    <div class=" bx-blue {{ $block->elem('main-detail') }}">
        <div class="product-item-detail-slider-container {{ $block->elem('main-detail__slider-container') }}"
            id="{{ $itemIds['BIG_SLIDER_ID'] }}">
            <span class="product-item-detail-slider-close" data-entity="close-popup"></span>
            <div class="product-item-detail-slider-block {{ $block->elem('main-detail__slider-container__slider-block')}} " data-entity="images-slider-block">
                <span class="product-item-detail-slider-left" data-entity="slider-control-left"
                    style="display: none;"></span>
                <span class="product-item-detail-slider-right" data-entity="slider-control-right"
                    style="display: none;"></span>
                <div class="product-item-label-text product-item-label-big product-item-label-top product-item-label-left"
                    id="{{ $itemIds['STICKER_ID'] }}" style="display: none;">
                </div>
                <div class="product-item-detail-slider-images-container {{ $block->elem('main-detail__slider-container__slider-block') }} " data-entity="images-container">
                    <div class="product-item-detail-slider-image active" data-entity="image" data-id="{{ $item['DETAIL_PICTURE']['ID'] }}" >
                        <img src="{{ $item['DETAIL_PICTURE']['SRC'] }}" alt="{{ $name }}" title="{{ $name }}"
                            itemprop="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="{{ $block->elem('main-detail__button-buy') }} product-item-detail-pay-block">
            <div class="product-item-detail-info-container">
                <div class="product-item-detail-price-current">
                    {!! $item['ITEM_PRICES'][0]['PRINT_PRICE'] !!}
                </div>
            </div>
            <div data-entity="main-button-container">
                <div id="{{ $itemIds['BASKET_ACTIONS_ID'] }}">
                    <div class="product-item-detail-info-container">
                        <a class="btn btn-default product-item-detail-buy-button" id="{{ $itemIds['BUY_LINK'] }}">
                            <span>Купить</span>
                        </a>
                    </div>
                </div>
                <div class="product-item-detail-info-container">
                    <a class="btn btn-link product-item-detail-buy-button" id="{{ $itemIds['NOT_AVAILABLE_MESS'] }}"
                        style="display: none;">
                        Нет в наличии
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>