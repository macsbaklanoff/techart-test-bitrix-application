<div class="main_detail_content">
    <div class="line_detail_news"></div>
    <div class="bread">
        <?php
        $last_key = array_key_last($arResult['breadCrumbs']);
        foreach ($arResult['breadCrumbs'] as $key => $breadCrumb): ?>
            <?php if ($key !== $last_key): ?>
                <a href="<?= htmlspecialchars($breadCrumb['url']) ?>" class="bread_item">
                    <?= htmlspecialchars($breadCrumb['title']) ?>
                </a> /
            <?php else: ?>
                <span class="bread_item_last"><?= htmlspecialchars($breadCrumb['title']) ?></span>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="detail_news">
        <h1 class="detail_news_headline"><?= htmlspecialchars($arResult['detailNews']['title']) ?></h1>
        <p class="detail_news_date"><?= htmlspecialchars($arResult['detailNews']['date']) ?></p>
        <div class="detail_news_info">
            <div class="detail_news_info_text">
                <?= str_replace('<p>', '<p class="detail_news_info_text_headline">', $arResult['detailNews']['announce']) ?>
                <div class="detail_news_info_text_content">
                    <?= str_replace('<p>', '<p class="detail_news_info_text_content_paragraph">', $arResult['detailNews']['content']) ?>
                </div>
            </div>
            <div class="detail_news_info_image">
                <img src="/upload/images/<?= htmlspecialchars($arResult['detailNews']['image']) ?>">
            </div>
        </div>
        <a href="/news-list/page-1/" class="detail_news_back_page">
            <img class="arrow_back_page" src="/upload/icons/arrow-back-page.png">
            назад к новостям
        </a>
    </div>
</div>