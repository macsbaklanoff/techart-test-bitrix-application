<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
    <?php $__currentLoopData = $arResult['ITEMS']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo \TAO::frontend()->renderBlock(
            'common/news-item',
            ['news' => $news],
        ); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/news-list/news-list.blade.php ENDPATH**/ ?>