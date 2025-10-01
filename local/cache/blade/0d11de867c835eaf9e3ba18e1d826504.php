<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>" id="<?php echo e($itemIds['ID']); ?>" >
    <div class="<?php echo e($block->elem('title-container')); ?>">
        <h1 class="<?php echo e($block->elem('title-container__title')); ?>">
            <?php echo e($name); ?>

        </h1>
    </div>
    <div class=" bx-blue <?php echo e($block->elem('main-detail')); ?>">
        <div class="product-item-detail-slider-container <?php echo e($block->elem('main-detail__slider-container')); ?>"
            id="<?php echo e($itemIds['BIG_SLIDER_ID']); ?>">
            <span class="product-item-detail-slider-close" data-entity="close-popup"></span>
            <div class="product-item-detail-slider-block <?php echo e($block->elem('main-detail__slider-container__slider-block')); ?> " data-entity="images-slider-block">
                <span class="product-item-detail-slider-left" data-entity="slider-control-left"
                    style="display: none;"></span>
                <span class="product-item-detail-slider-right" data-entity="slider-control-right"
                    style="display: none;"></span>
                <div class="product-item-label-text product-item-label-big product-item-label-top product-item-label-left"
                    id="<?php echo e($itemIds['STICKER_ID']); ?>" style="display: none;">
                </div>
                <div class="product-item-detail-slider-images-container <?php echo e($block->elem('main-detail__slider-container__slider-block')); ?> " data-entity="images-container">
                    <div class="product-item-detail-slider-image active" data-entity="image" data-id="<?php echo e($item['DETAIL_PICTURE']['ID']); ?>" >
                        <img src="<?php echo e($item['DETAIL_PICTURE']['SRC']); ?>" alt="<?php echo e($name); ?>" title="<?php echo e($name); ?>"
                            itemprop="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="<?php echo e($block->elem('main-detail__button-buy')); ?> product-item-detail-pay-block">
            <div class="product-item-detail-info-container">
                <div class="product-item-detail-price-current">
                    <?php echo $item['ITEM_PRICES'][0]['PRINT_PRICE']; ?>

                </div>
            </div>
            <div data-entity="main-button-container">
                <div id="<?php echo e($itemIds['BASKET_ACTIONS_ID']); ?>">
                    <div class="product-item-detail-info-container">
                        <a class="btn btn-default product-item-detail-buy-button" id="<?php echo e($itemIds['BUY_LINK']); ?>">
                            <span>Купить</span>
                        </a>
                    </div>
                </div>
                <div class="product-item-detail-info-container">
                    <a class="btn btn-link product-item-detail-buy-button" id="<?php echo e($itemIds['NOT_AVAILABLE_MESS']); ?>"
                        style="display: none;">
                        Нет в наличии
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/book-detail/book-detail.blade.php ENDPATH**/ ?>