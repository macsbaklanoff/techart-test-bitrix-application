<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
    <div class="<?php echo e($block->elem('map')); ?>" id="map">
        <div class="<?php echo e($block->elem('my-popup')); ?>" id="my-popup">
        </div>
    </div>
    <div class="<?php echo e($block->elem('info-office')); ?>" id="info-office">
        <?php echo $officeTulaInfo; ?>

    </div>
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/map/map.blade.php ENDPATH**/ ?>