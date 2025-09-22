<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
    <?php for($i = 0; $i < $countVisiblePages; $i++): ?>
        <a href="<?php echo e($hrefFromPagination . $i + 1); ?>" class="<?php echo e($currentPage == $i + 1 || ($currentPage > $countVisiblePages && $i == 2)
            ? $block->elem('item')->mod('current') : $block->elem('item')); ?>">
            <?php echo e($currentPage > $countVisiblePages && $i + 1 == $countVisiblePages ? $currentPage : $i + 1); ?>

        </a>
    <?php endfor; ?>
    <?php if($countVisiblePages > 1): ?>
        <a href="<?php echo e($hrefFromPagination . $currentPage + 1); ?>"
            class="<?php echo e(($currentPage * $countItemsPage) >= $totalCountNews ? $block->elem('none-item') : $block->elem('next')); ?>">
            <img class="<?php echo e($block->elem('arrow-next-page')); ?>" src="/upload/icons/arrow-next-page.png">
        </a>
    <?php endif; ?>
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/pagination/pagination.blade.php ENDPATH**/ ?>