<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
    <label><?php echo e($field['label']); ?></label>
    <select name="<?php echo e($field['name']); ?>" id="<?php echo e($field['id']); ?>" >
        <?php $__currentLoopData = $field['themes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($theme); ?>" ><?php echo e($theme); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/forms/forms-select/forms-select.blade.php ENDPATH**/ ?>