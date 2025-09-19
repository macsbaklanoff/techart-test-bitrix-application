<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

\TAO::frontendCss('index');
\TAO::frontendJs('index');

?>

<?
global $USER;
$userName = $USER->GetFullName();
if (empty($userName)):
	$userName = $USER->GetLogin();
endif;
?>

<?
ob_start();
$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"horizontal_multilevel",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT_MENU" => "Y",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"MENU_THEME" => "site",
		"USE_EXT" => "Y",
	),
	false
);
$menu = ob_get_clean();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><? $APPLICATION->ShowTitle(); ?></title>
	<? $APPLICATION->ShowHead(); ?>
</head>

<body>
	<div class="panel" id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>
	
	<?=
		\TAO::frontend()->renderBlock(
			'common/header',
			[
				'userName' => $userName,
				'menu' => $menu,
			],
		)
		?>
		