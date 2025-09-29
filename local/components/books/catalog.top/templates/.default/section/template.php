<?

use Bitrix\Main\Localization\Loc;
use Bitrix\Catalog\ProductTable;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $elementEdit
 * @var string $elementDelete
 * @var string $elementDeleteParams
 * @var string $componentPath
 */

CJSCore::Init(['ajax', 'popup', 'fx']);


$this->addExternalJS("/bitrix/components/bitrix/catalog.item/templates/.default/script.js");

$this->addExternalCss("/bitrix/components/bitrix/catalog.item/templates/.default/style.css");

$this->addExternalCss('/bitrix/css/main/bootstrap.css');


$areaIds = [];
$itemParameters = [];

foreach ($arResult['ITEMS'] as $item) {
	$action = 'processOrder';

	if ($arResult['IS_NEW_ORDER']) {
		$action = 'showOrder';
	}

	$uniqueId = $item['ID'] . '_' . md5($this->randString() . $action);
	$areaIds[$item['ID']] = $this->GetEditAreaId($uniqueId);
	$this->AddEditAction($uniqueId, $item['EDIT_LINK'], $elementEdit);
	$this->AddDeleteAction($uniqueId, $item['DELETE_LINK'], $elementDelete, $elementDeleteParams);

	$itemParameters[$item['ID']] = [
		'SKU_PROPS' => $arResult['SKU_PROPS'][$item['IBLOCK_ID']],
		'MESS_NOT_AVAILABLE' => ($arResult['MODULES']['catalog'] && $item['PRODUCT']['TYPE'] === ProductTable::TYPE_SERVICE
			? $arParams['~MESS_NOT_AVAILABLE_SERVICE']
			: $arParams['~MESS_NOT_AVAILABLE']
		),
	];
}

?>
<?=
	\TAO::frontend()->renderBlock(
		'common/books',
		[
			'arResult' => $arResult,
			'areaIds' => $areaIds,
		]
	)
?>