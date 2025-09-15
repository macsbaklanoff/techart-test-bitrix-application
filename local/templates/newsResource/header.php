<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die(); ?>

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
	<header class="header">
		<a href='/news' class="header_info">
			<img class="header_info_icon" src="/upload/icons/logo 1.svg">
			<p class="header_info_headline">ГАЛАКТИЧЕСКИЙ </br> ВЕСТНИК</p>
		</a>
		<div class="header_menu">
			<? $APPLICATION->IncludeComponent(
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
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel.template",
		"MENU_THEME" => "site"
	),
	false
); ?>
		</div>
	</header>