<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
    <div class="<?php echo e($block->elem('text')); ?>" >
        <div class="<?php echo e($block->elem('text__headline')); ?>" ><?php echo $arResult['~PREVIEW_TEXT']; ?></div>
        <div class="<?php echo e($block->elem('text__content')); ?>" >
            <div class="<?php echo e($block->elem('text__content__paragraph')); ?>" ><?php echo $arResult['~DETAIL_TEXT']; ?></div>
        </div>
        <div class="<?php echo e($block->elem('text__content__themes')); ?>" ><?php echo $resultThemes; ?></div>   
    </div>
    <img class="<?php echo e($block->elem('image')); ?>" src="<?php echo e($arResult['DETAIL_PICTURE']['SRC']); ?>"
    alt="<?php echo e($arResult["DETAIL_PICTURE"]["ALT"] ?? $arResult['NAME']); ?>"
    title="<?php echo e($arResult["DETAIL_PICTURE"]["TITLE"] ?? $arResult['NAME']); ?>">
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/detail/detail.blade.php ENDPATH**/ ?>