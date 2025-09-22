<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    <div class="{{ $block->elem('text') }}" >
        <div class="{{ $block->elem('text__headline') }}" >{!! $arResult['~PREVIEW_TEXT'] !!}</div>
        <div class="{{ $block->elem('text__content') }}" >
            <div class="{{ $block->elem('text__content__paragraph') }}" >{!! $arResult['~DETAIL_TEXT'] !!}</div>
        </div>
        <div class="{{ $block->elem('text__content__themes') }}" >{!! $resultThemes !!}</div>   
    </div>
    <img class="{{ $block->elem('image') }}" src="{{ $arResult['DETAIL_PICTURE']['SRC'] }}"
    alt="{{ $arResult["DETAIL_PICTURE"]["ALT"] ?? $arResult['NAME']}}"
    title="{{ $arResult["DETAIL_PICTURE"]["TITLE"] ?? $arResult['NAME'] }}">
</div>