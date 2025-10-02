<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>" data-entity="catalog-top-container">
        <?php $__currentLoopData = $arResult['ITEMS']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo \TAO::frontend()->renderBlock(
                'common/book',
                [
                    'item' => $item,
                    'areaId' =>  $areaIds[$item['ID']],
                    'fontSize' => '21px',
                ]
            ); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/books/books.blade.php ENDPATH**/ ?>