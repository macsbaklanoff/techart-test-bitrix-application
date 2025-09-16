<?php
$aMenuLinks = array();

if (CModule::IncludeModule("iblock")) {
	$elements = CIBlockElement::GetList(
		array(),
		array('IBLOCK_ID' => 10, 'ACTIVE' => 'Y'),
		false,
		false,
		array('ID', 'NAME')
	);

	while ($arElements = $elements->Fetch()) {
		$aMenuLinks[] = array(
			$arElements['NAME'],
			'/news/filter-theme/' . $arElements['ID'] . '/',
			array(),
			array(),
			""
		);
	}
}
?>