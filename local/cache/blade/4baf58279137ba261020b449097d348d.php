<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">

        <div class="<?php echo e($block->elem('header')); ?>">
            <h4><?php echo e($header); ?></h4>
        </div>
        <div class="<?php echo e($block->elem('line')); ?>"></div>
        <div class="<?php echo e($block->elem('elements')); ?>">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo \TAO::frontend()->renderBlock(
                    'common/book',
                    [
                        'item' => $item,
                        'areaId' => $areaIds[$item['ID']],
                    ],
                ); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/book-detail-list/book-detail-list.blade.php ENDPATH**/ ?>