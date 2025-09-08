<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Test");
?>


<?
$APPLICATION->IncludeComponent(
    "local:test.home",
    "",
    );
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>