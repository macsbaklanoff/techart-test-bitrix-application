<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
    <div class="product-item-container <?php echo e($block->elem('product-item-container')); ?>" id="<?php echo e($areaId); ?>">
        <div class="product-item <?php echo e($block->elem('item-container')); ?>">
            <a class="<?php echo e($block->elem('item-container__image')); ?>" href="<?php echo $item['DETAIL_PAGE_URL']; ?>"
                title="<?php echo e($item['NAME']); ?>" data-entity="image-wrapper">
                <span id="<?php echo e($areaId . '_pict_slider'); ?>" style="display: none;" data-slider-interval="3000"
                    data-slider-wrap="true">
                </span>
                <span class="<?php echo e($block->elem('item-container__image__pict')); ?>" id="<?php echo e($areaId . '_pict'); ?>"
                    style="background-image: url('<?php echo e($item['DETAIL_PICTURE']['SRC']); ?>'); ">
                </span>
                <img class="<?php echo e($block->elem('item-container__image__pict')); ?>" id="<?php echo e($areaId . '_secondpict'); ?>"
                    src="<?php echo e($item['DETAIL_PICTURE']['SRC']); ?>" style="display: none;" />
                <div id="<?php echo e($areaId . '_pict_slider_indicator'); ?>" style="display: none;">
                </div>
            </a>
            <div class="<?php echo e($block->elem('item-container__title-container')); ?>">
                <a class="<?php echo e($block->elem('item-container__title-container__title')); ?>"
                    href="<?php echo e($item['DETAIL_PAGE_URL']); ?>" title="<?php echo e($item['NAME']); ?>">
                    <?php echo e($item['NAME']); ?>

                </a>
            </div>
            <div class="<?php echo e($block->elem('item-container__price-container')); ?>" data-entity="price-block">
                <span class="<?php echo e($block->elem('item-container__price-container__price')); ?>" id="<?php echo e($areaId . '_price'); ?>">
                    <?php echo $item['ITEM_PRICES'][0]['PRINT_PRICE']; ?>

                </span>
            </div>

            <div class="bx-blue product-item-info-container product-item-hidden <?php echo e($block->elem('product-item-info-container')); ?> " data-entity="buttons-block">
                <div class="product-item-button-container" class="<?php echo e($block->elem('product-item-button-container')); ?>" id="<?php echo e($areaId . '_basket_actions'); ?>">
                    <a class="btn btn-default btn-md" class="<?php echo e($block->elem('button')); ?>" id="<?php echo e($areaId . '_buy_link'); ?>" href="javascript:void(0)"
                        rel="nofollow">
                        В корзину </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        var <?php echo e('ob' . $areaId); ?> = new JCCatalogItem({
            'PRODUCT_TYPE': '<?php echo e($item["CATALOG_TYPE"]); ?>',
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
                'ID': '<?php echo e($item["ID"]); ?>',
                'NAME': '<?php echo e($item["NAME"]); ?>',
                'DETAIL_PAGE_URL': '<?php echo e($item["DETAIL_PAGE_URL"]); ?>',
                'PICT': {
                    'ID': '<?php echo e($item["PREVIEW_PICTURE"]["ID"]); ?>',
                    'SRC': '<?php echo e($item["PREVIEW_PICTURE"]["SRC"]); ?>',
                    'WIDTH': '<?php echo e($item["PREVIEW_PICTURE"]["WIDTH"]); ?>',
                    'HEIGHT': '<?php echo e($item["PREVIEW_PICTURE"]["HEIGHT"]); ?>'
                },
                'CAN_BUY': <?php echo e($item["CAN_BUY"] ? 'true' : 'false'); ?>,
                'CHECK_QUANTITY': false,
                'MAX_QUANTITY': '<?php echo e($item["CATALOG_QUANTITY"]); ?>',
                'STEP_QUANTITY': '1',
                'QUANTITY_FLOAT': true,
                'ITEM_PRICE_MODE': '<?php echo $item["ITEM_PRICE_MODE"]; ?>',
                'ITEM_PRICES': <?php echo json_encode($item["ITEM_PRICES"]); ?>,
                'ITEM_PRICE_SELECTED': '<?php echo $item["ITEM_PRICE_SELECTED"] ?? "0"; ?>',
                'ITEM_QUANTITY_RANGES': { 'ZERO-INF': { 'HASH': 'ZERO-INF', 'QUANTITY_FROM': '', 'QUANTITY_TO': '', 'SORT_FROM': '0', 'SORT_TO': 'INF' } },
                'ITEM_QUANTITY_RANGE_SELECTED': 'ZERO-INF',
                'ITEM_MEASURE_RATIOS': <?php echo json_encode($item["ITEM_MEASURE_RATIOS"] ?? []); ?>,
                'ITEM_MEASURE_RATIO_SELECTED': '<?php echo $item["ITEM_MEASURE_RATIO_SELECTED"] ?? "0"; ?>',
                'MORE_PHOTO': <?php echo json_encode($item["MORE_PHOTO"] ?? []); ?>,
                'MORE_PHOTO_COUNT': '<?php echo e($item["MORE_PHOTO_COUNT"] ?? "0"); ?>'
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
                'ID': '<?php echo e($areaId); ?>',
                'PICT_ID': '<?php echo e($areaId . "_secondpict"); ?>',
                'PICT_SLIDER_ID': '<?php echo e($areaId . "_pict_slider"); ?>',
                'QUANTITY_ID': '<?php echo e($areaId . "_quantity"); ?>',
                'QUANTITY_UP_ID': '<?php echo e($areaId . "_quant_up"); ?>',
                'QUANTITY_DOWN_ID': '<?php echo e($areaId . "_quant_down"); ?>',
                'PRICE_ID': '<?php echo e($areaId . "_price"); ?>',
                'PRICE_OLD_ID': '<?php echo e($areaId . "_price_old"); ?>',
                'PRICE_TOTAL_ID': '<?php echo e($areaId . "_price_total"); ?>',
                'BUY_ID': '<?php echo e($areaId . "_buy_link"); ?>',
                'BASKET_PROP_DIV': '<?php echo e($areaId . "_basket_prop"); ?>',
                'BASKET_ACTIONS_ID': '<?php echo e($areaId . "_basket_actions"); ?>',
                'NOT_AVAILABLE_MESS': '<?php echo e($areaId . "_not_avail"); ?>',
                'COMPARE_LINK_ID': '<?php echo e($areaId . "_compare_link"); ?>',
                'SUBSCRIBE_ID': '<?php echo e($areaId . "_subscribe"); ?>'
            },
            'PRODUCT_DISPLAY_MODE': 'N',
            'USE_ENHANCED_ECOMMERCE': 'N',
            'DATA_LAYER_NAME': 'dataLayer',
            'BRAND_PROPERTY': '',
            'IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED': false
        });
    </script>
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/book/book.blade.php ENDPATH**/ ?>