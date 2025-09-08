<div class="main_news">
    <img class="main_news_image" src="/bitrix/templates/11/images/<?= htmlspecialchars($arResult['lastNews']['image']) ?>">
    <div class="main_news_info">
        <h4 class="main_news_title"><?= htmlspecialchars($arResult['lastNews']['title']) ?></h4>
        <?= str_replace('<p>', '<p class="main_news_description">', $arResult['lastNews']['announce']) ?>
    </div>
</div>

<div class="main_content">
    <h4 class="news_header_headline">Новости</h4>
    <button class="button_more" onclick="window.location.href = '#'">
        Подробнее
        <img class="more-arrow" src="/bitrix/templates/11/icons/arrow-more.png">
    </button>
</div>