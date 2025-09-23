<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
    <form class="<?php echo e($block->elem('form-container')); ?>" action="<?php echo e($postFormActionUri); ?>" method="<?php echo e($method); ?>" id="form">
        <?php echo bitrix_sessid_post(); ?>

        <div id="errors" class="<?php echo e($block->elem('error-container')); ?>" ></div>
        <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo \TAO::frontend()->renderBlock(
                "forms/forms-" . $field['nameForm'],
                [
                    'field' => $field,
                    'arParams' => $arParams,
                ]
            ); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </form>
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/forms/forms-form/forms-form.blade.php ENDPATH**/ ?>