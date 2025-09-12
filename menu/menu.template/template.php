<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>

<nav class="navbar navbar-expand-lg navbar-light navigation">
	<?
	$menu = $arParams['MENU'];
	foreach ($menu as $item): ?>
		<a class="menu_item" href=<?= $item['LINK'] ?>><?= htmlspecialchars($item['TEXT']) ?></a>
		<?
		if (!empty($item['ITEMS'])): ?>
			<ul class="submenu">
				<?
				foreach ($item['ITEMS'] as $itemSecondLevel): ?>
						<a class ="menu_item" href=<?= $itemSecondLevel['LINK'] ?>><?= htmlspecialchars($itemSecondLevel['TEXT']) ?></a>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	<?php endforeach; ?>
</nav>