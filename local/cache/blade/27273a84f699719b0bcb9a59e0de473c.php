<div class="<?php echo e($block->mod($mods ?? [])); ?><?php if($class ?? false): ?> <?php echo e($class); ?><?php endif; ?>">
    <a href="<?php echo e($news['DETAIL_PAGE_URL']); ?>" class="<?php echo e($block->elem('item')); ?>" >
            <?php echo \TAO::frontend()->renderBlock(
                'common/date-news',
                [
                    'date' => $news['ACTIVE_FROM']
                ],
            ); ?>

            <h5 class="<?php echo e($block->elem('item__title')); ?>" ><?php echo e($news['NAME']); ?></h5>
            <div class=<?php echo e($block->elem('item__announce')); ?> ><?php echo $news['~PREVIEW_TEXT']; ?></div>
            <button class="<?php echo e($block->elem('item__button-more')); ?>" >
                Подробнее
                <img class="<?php echo e($block->elem('item__button-more__image')); ?>" src="/upload/icons/arrow-more.png">
            </button>
        </a>
</div><?php /**PATH /var/www/workspace/test-bitrix/www/local/templates/newsResource/frontend/src/block/common/news-item/news-item.blade.php ENDPATH**/ ?>