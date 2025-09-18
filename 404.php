<style>
	div {
		grid-column: 7/-2;
		font-family: 'OpenSans-Regular';
		font-size: 16px;
	}

	.label_page_not_found {
		grid-column: 6/-2;
		font-family: 'OpenSans-Regular';
		font-size: 18px;
		text-decoration: none;
	}
</style>

<?
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>

<div>
	<h1 class="label_page_not_found">Page not found</h1>
	<a href="/news/" class="label_page_not_found">На главную</a>
</div>

<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>