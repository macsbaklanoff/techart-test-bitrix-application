<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Test");
?>

<?
// $dbConnect = \Bitrix\Main\Application::getConnection();

// $countItemsPage = 4;

// $currentPage = getCurrentPage($_SERVER['REQUEST_URI']) ?? 1;

// $offset = $countItemsPage * $currentPage - $countItemsPage;

// function getCurrentPage($requestUri)
// {
//   if (preg_match('~^/news-list/page-(\d+)/$~', $requestUri, $matches)) {
//     return (int) $matches[1];
//   }
// }

// $lastNews = $dbConnect->query("SELECT * FROM news ORDER BY id DESC LIMIT 1")->fetch();
// $newsList = $dbConnect->query("SELECT * FROM news ORDER BY date DESC LIMIT $countItemsPage OFFSET $offset")->fetchAll();

// foreach ($newsList as &$news) {
//   $news['date'] = str_replace('-', '.', explode(' ', $news['date'])[0]);
// }

// $lastNews['announce'] = str_replace('<p>', '<p class="main_news_description">', $lastNews['announce']);

// $arParams['lastNews'] = $lastNews;
// $arParams['news'] = $newsList;
// $arParams['currentPage'] = $currentPage;


$arParams = array(
  "IBLOCK_ID" => 9,
);

$APPLICATION->IncludeComponent(
  "bitrix:news.list",
  "news.list",
  $arParams,
  false
);
?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>