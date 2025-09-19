<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
    <a  href="/" class="<?php echo e($block->elem('info')); ?>">
        <img class="<?php echo e($block->elem('icon')); ?>" src="/upload/icons/logo 1.svg" />
        <p class="<?php echo e($block->elem('headline')); ?>">ГАЛАКТИЧЕСКИЙ ВЕСТНИК</p>
        <p class="<?php echo e($block->elem('label-name')); ?>"><?php echo e(!empty($userName) ? 'Имя: ' . $userName : ''); ?></p>
    </a>
    <div class="<?php echo e($block->elem('menu')); ?>" >
        <?php echo $menu; ?>

    </div>
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/header/header.blade.php ENDPATH**/ ?>