<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
    <div class="<?php echo e($block->elem('info')); ?>">
        <p><?php echo e($field['placeholder']); ?>:</p>
        <?php echo e($message); ?>

        <?php if(empty($arParams['REQUIRED_FIELDS']) || in_array($field['needle'], $arParams["REQUIRED_FIELDS"])): ?>
            <span class="<?php echo e($block->elem('info__mf-req')); ?>">*</span>
        <?php endif; ?>
    </div>
    <input id="<?php echo e($field['id']); ?>" class="<?php echo e($block->elem('text-input')); ?>" placeholder="<?php echo e($field['placeholder']); ?>"
        type="<?php echo e($field['type']); ?>" name="<?php echo e($field['name']); ?>" value="<?php echo e($field['value']); ?>">
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/forms/forms-input/forms-input.blade.php ENDPATH**/ ?>