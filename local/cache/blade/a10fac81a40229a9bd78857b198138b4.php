<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
    <?php
    $last_key = array_key_last($breadCrumbs);
    ?>
    <?php $__currentLoopData = $breadCrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $breadCrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($key !== $last_key): ?>
            <a href="<?php echo e($breadCrumb['url']); ?>" class="<?php echo e($block->elem('item')); ?>" ><?php echo e($breadCrumb['title']); ?></a> /            
        <?php else: ?>
        <span class="<?php echo e($block->elem('last')); ?>" ><?php echo e($breadCrumb['title']); ?></span>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/bread-crumbs/bread-crumbs.blade.php ENDPATH**/ ?>