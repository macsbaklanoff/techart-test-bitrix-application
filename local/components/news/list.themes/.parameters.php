<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}
/** @var array $arCurrentValues */

use Bitrix\Main\Loader;

if (!Loader::includeModule('iblock'))
{
	return;
}

$arTypesEx = CIBlockParameters::GetIBlockTypes();

$arIBlocks = [];
$iblockFilter = [
	'ACTIVE' => 'Y',
];
if (!empty($arCurrentValues['IBLOCK_TYPE']))
{
	$iblockFilter['TYPE'] = $arCurrentValues['IBLOCK_TYPE'];
}
$db_iblock = CIBlock::GetList(["SORT"=>"ASC"], $iblockFilter);
while($arRes = $db_iblock->Fetch())
{
	$arIBlocks[$arRes["ID"]] = "[" . $arRes["ID"] . "] " . $arRes["NAME"];
}

$arComponentParameters = [
	"GROUPS" => [],
	"PARAMETERS" => [
		"IBLOCK_TYPE" => [
			"PARENT" => "BASE",
			"NAME" => GetMessage("T_IBLOCK_DESC_LIST_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arTypesEx,
			"DEFAULT" => "news",
			"REFRESH" => "Y",
		],
		"IBLOCK_ID" => [
			"PARENT" => "BASE",
			"NAME" => GetMessage("T_IBLOCK_DESC_LIST_ID"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlocks,
			"DEFAULT" => '={$_REQUEST["ID"]}',
			"ADDITIONAL_VALUES" => "Y",
			"REFRESH" => "Y",
		],
	],
];