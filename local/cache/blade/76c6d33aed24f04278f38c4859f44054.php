<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
    <img class="<?php echo e($block->elem('image')); ?>" src="<?= $news['DETAIL_PICTURE']['SRC'] ?>"
        alt="<?= htmlspecialchars($news['DETAIL_PICTURE']['ALT'] ?? $news['NAME']) ?>"
        title="<?= htmlspecialchars($news['DETAIL_PICTURE']['TITLE'] ?? $news['NAME']) ?>" />
    <div class="<?php echo e($block->elem('info')); ?>">
        <h4 class="<?php echo e($block->elem('info__title')); ?>"><?php echo e($news['~NAME']); ?></h4>
        <div class="<?php echo e($block->elem('info__description')); ?>"><?php echo $news['~PREVIEW_TEXT']; ?></div>
    </div>
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/banner/banner.blade.php ENDPATH**/ ?>