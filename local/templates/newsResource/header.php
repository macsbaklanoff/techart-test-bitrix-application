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
		<a href='/' class="header_info">
			<img class="header_info_icon" src="/upload/icons/logo 1.svg">
			<p class="header_info_headline">ГАЛАКТИЧЕСКИЙ </br> ВЕСТНИК</p>
		</a>
		<div class="header_menu">
			<? $APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel.template", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "horizontal_multilevel",
		"MENU_THEME" => "site"
	),
	false
); ?>
		</div>
	</header>