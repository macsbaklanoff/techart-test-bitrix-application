<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>" data-entity="item"
     id="<?php echo e($areaId); ?>" >
    <a href="<?php echo $item['DETAIL_PAGE_URL']; ?>">
        <img src="<?php echo e($item['DETAIL_PICTURE']['SRC']); ?>" class="<?php echo e($block->elem('image')); ?>">
    </a>
    <p class="<?php echo e($block->elem('title')); ?>"><?php echo e($item['NAME']); ?></p>
    <p class="<?php echo e($block->elem('price')); ?>"><?php echo $item['ITEM_PRICES'][0]['PRINT_PRICE']; ?></p>
    <a id="<?php echo e($areaId . '_buy_link'); ?>" rel="nofollow">
        В корзину
    </a>
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/book/book.blade.php ENDPATH**/ ?>