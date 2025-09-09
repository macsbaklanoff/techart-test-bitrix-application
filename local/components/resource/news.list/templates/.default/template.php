<?php
use Local\Components\Resource\NewsList;
?>

<div class="main_news">
    <img class="main_news_image"
        src="/upload/images/<?= htmlspecialchars($arResult['lastNews']['image']) ?>">
    <div class="main_news_info">
        <h4 class="main_news_title"><?= htmlspecialchars($arResult['lastNews']['title']) ?></h4>
        <?= str_replace('<p>', '<p class="main_news_description">', $arResult['lastNews']['announce']) ?>
    </div>
</div>

<div class="news">
    <div class="news_header">
        <h4 class="news_header_headline">Новости</h4>
    </div>
    <div class="news_list-news">
        <?php foreach ($arResult['newsList'] as $news): ?>
            <a href=<?= "/detail-news/" . $news['id'] . "/"?> class="news_list-news_item-news">
                <p class="news_list-news_item-news_date"><?= htmlspecialchars($news['date']) ?></p>
                <h5 class="news_list-news_item-news_title"><?= htmlspecialchars($news['title']) ?></h5>
                <?= str_replace('<p>', '<p class="news_list-news_item-news_announce">', $news['announce']) ?>
                <button class="news_list-news_item-news_more">
                    Подробнее
                    <img class="more-arrow" src="/upload/icons/arrow-more.png">
                </button>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="news_pagination">
        <a href=<?= NewsList::getUrlPage(1)?>
            class="<?= $arResult['currentPage'] == 1 ? 'news_pagination_item current' : 'news_pagination_item' ?>">1</a>
        <a href=<?= NewsList::getUrlPage(2)?>
            class="<?= $arResult['currentPage'] == 2 ? 'news_pagination_item current' : 'news_pagination_item' ?>">2</a>
        <a href=<?= NewsList::getUrlPage(3)?>
            class="<?= $arResult['currentPage'] >= 3 ? 'news_pagination_item current' : 'news_pagination_item' ?>">
            <?=$arResult['currentPage'] > 3 ? $arResult['currentPage'] : 3?>
        </a>
        <a href=<?=NewsList::getUrlPage($arResult['currentPage'] + 1)?>
            class="<?= ($arResult['currentPage'] * $arResult['countItemsPage']) >= $arResult['totalCountNews'] ? 'none-news' : 'news_pagination_next' ?>">
            <img class="arrow-next-page" src="/upload/icons/arrow-next-page.png">
        </a>
    </div>
</div>