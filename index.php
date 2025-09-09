<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Test");
?>

<?
  $APPLICATION->IncludeComponent(
    "resource:test.home.component",
    "",
    );  
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>