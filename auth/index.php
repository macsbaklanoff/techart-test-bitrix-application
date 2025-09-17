<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Test");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth.form", 
	array(
		"FORGOT_PASSWORD_URL" => "/auth/forget.php",
		"PROFILE_URL" => "/auth/personal.php",
		"REGISTER_URL" => "/auth/registration.php",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "auth.fom"
	),
	false
);?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>