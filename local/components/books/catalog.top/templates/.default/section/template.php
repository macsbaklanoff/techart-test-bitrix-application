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

$areaIds = [];
$itemParameters = [];

foreach ($arResult['ITEMS'] as $item) {
	$uniqueId = $item['ID'] . '_' . md5($this->randString() . $component->getAction());
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