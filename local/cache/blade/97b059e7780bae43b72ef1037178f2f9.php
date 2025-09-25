<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
    <div class="<?php echo e($block->elem('reference')); ?>">
        <p class="<?php echo e($block->elem('office-tula')); ?>" id="office-tula">Офис в Туле</p>
        <p class="<?php echo e($block->elem('office-moscow')); ?>" id="office-moscow">Офис в Москве</p>
    </div>
    <div class="<?php echo e($block->elem('map')); ?>" id="map">
        <div class="<?php echo e($block->elem('my-popup')); ?>" id="my-popup">
        </div>
    </div>
    <?php echo \TAO::frontend()->renderBlock(
        'common/map-tula',
        [],
    ); ?>

    <?php echo \TAO::frontend()->renderBlock(
        'common/map-moscow',
        [],
    ); ?>

</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/tab/tab.blade.php ENDPATH**/ ?>