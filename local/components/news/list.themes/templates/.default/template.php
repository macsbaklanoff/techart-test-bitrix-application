<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
?>

<div class="main_content">
	<h1 class="main_content_header">Список тем</h1>
	<? foreach($arResult['THEMES'] as $theme): ?>
		<p class="main_content_theme"><?=$theme['NAME']?></p>
	<?endforeach?>
</div>