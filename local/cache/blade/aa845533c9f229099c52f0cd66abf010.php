<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
<?php if(!empty($arResult)): ?>
<?php
    $previousLevel = 0;
?>
<ul id="horizontal-multilevel-menu">
        <?php $__currentLoopData = $arResult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
                <?php echo str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>

            <?php endif; ?>
            
            <?php if($arItem['IS_PARENT']): ?>
                <?php if($arItem["DEPTH_LEVEL"] == 1): ?>
                    <li><a href="<?php echo e($arItem['LINK']); ?>" class="<?php echo e($arItem['SELECTED'] ? 
                    $block->elem('root-item-selected') :
                    $block->elem('root-item')); ?>"><?php echo e($arItem['TEXT']); ?></a>
                    <ul>
                <?php else: ?>
                    <li class="<?php echo e($arItem['SELECTED'] ? $block->elem('item-selected li-item') : $block->elem('')); ?>">
                        <a href="<?php echo e($arItem['LINK']); ?>" class="<?php echo e($block->elem('parent')); ?>"><?php echo e($arItem['TEXT']); ?></a>
                    <ul>
                <?php endif; ?>
            <?php else: ?>
                <?php if($arItem['PERMISSION'] > "D"): ?>
                    <?php if($arItem['DEPTH_LEVEL'] == 1): ?>
                        <li class="<?php echo e($block->elem('li-item')); ?>">
                            <a href="<?php echo e($arItem['LINK']); ?>" class="<?php echo e($arItem['SELECTED'] ? $block->elem('root-item-selected') : $block->elem('root-item')); ?>"><?php echo e($arItem['TEXT']); ?></a>
                        </li>
                    <?php else: ?>
                        <li class="<?php echo e($arItem['SELECTED'] ? $block->elem('item-selected li-item') : $block->elem('')); ?>">
                            <a href="<?php echo e($arItem['LINK']); ?>"><?php echo e($arItem['TEXT']); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if($arItem['DEPTH_LEVEL'] == 1): ?>
                       <li>
                            <a href="" class="<?php echo e($arItem['SELECTED'] ? $block->elem('root-item-selected') : $block->elem('root-item')); ?>" title=""><?php echo e($arItem['TEXT']); ?></a>
                       </li>
                    <?php else: ?>
                       <li><a href="" class="<?php echo e($block->elem('denied')); ?>"><?php echo e($arItem['TEXT']); ?></a></li> 
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
            
            <?php
                $previousLevel = $arItem['DEPTH_LEVEL'];
            ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <?php if($previousLevel > 1): ?>
            <?php echo str_repeat("</ul></li>", ($previousLevel - 1)); ?>

        <?php endif; ?>
    </ul>
<?php endif; ?>
</div>
<?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/menu/menu.blade.php ENDPATH**/ ?>