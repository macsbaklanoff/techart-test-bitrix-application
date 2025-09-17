<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

class ListThemes extends CBitrixComponent
{
	public function executeComponent()
	{
		$this->initResult();
		$this->includeComponentTemplate();
	}

	private function initResult()
	{
		$elements = CIBlockElement::GetList(
			array(),
			array('IBLOCK_ID' => $this->arParams['IBLOCK_ID'], 'ACTIVE' => 'Y'),
			false,
			false,
			array('ID', 'NAME')
		);
		
		while ($arElements = $elements->Fetch()) {
			$themesList[] = $arElements;
		}
		$this->arResult['THEMES'] = $themesList;
	}
}