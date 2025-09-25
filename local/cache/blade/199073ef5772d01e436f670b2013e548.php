<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
    <div class="<?php echo e($block->elem('info')); ?>" >
        <p><?php echo e($field['label']); ?>:</p>
        <?php echo e($field['message']); ?>

        <?php if($field['required']): ?>
            <span class="<?php echo e($block->elem('mf-req')); ?>" >*</span>
        <?php endif; ?>
    </div>
    <textarea placeholder="<?php echo e($field['label']); ?>" class="<?php echo e($block->elem('input-message')); ?>" name="<?php echo e($field['name']); ?>" rows="<?php echo e($field['rows']); ?>" cols="<?php echo e($field['cols']); ?>" id="<?php echo e($field['id']); ?>" >
    </textarea>
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/forms/forms-textarea/forms-textarea.blade.php ENDPATH**/ ?>