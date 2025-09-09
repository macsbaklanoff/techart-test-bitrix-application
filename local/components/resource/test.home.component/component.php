<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @global CMain $APPLICATION */

// region Check common parameters
$testVariable = 0;

$arResult['testVariable'] = $testVariable;

var_dump($testVariable);
$this->IncludeComponentTemplate($componentPage);