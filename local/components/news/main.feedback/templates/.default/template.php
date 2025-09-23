<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

\TAO::frontendCss('forms');
\TAO::frontendJs('forms');

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
	<h4 class="header-feedback">Форма обратной связи</h4>
	<? if (!empty($arResult["ERROR_MESSAGE"])) {
		foreach ($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if (!empty($arResult["OK_MESSAGE"])) {
		?>
		<div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div>
		<?
	}
	?>
	<?=
		\TAO::frontend()->renderBlock(
			'forms/forms-form',
			[
				'postFormActionUri' => POST_FORM_ACTION_URI,
				'method' => 'POST',
				'arParams' => $arParams,
				'fields' => $arResult['FIELDS'],
			],
		)
		?>
</div>