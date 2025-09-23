<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    <div class="{{ $block->elem('info') }}" >
        <p>{{ $field['label'] }}:</p>
        {{ $field['message'] }}
        @if(empty($arParams['REQUERED_FIELDS']) || in_array($field['needle'], $arParams['REQUIRED_FIELDS']))
            <span class="{{ $block->elem('mf-req') }}" >*</span>
        @endif
    </div>
    <textarea placeholder="{{ $field['label'] }}" class="{{ $block->elem('input-message') }}" name="{{ $field['name'] }}" rows="{{ $field['rows'] }}" cols="{{ $field['cols'] }}" id="{{ $field['id'] }}" >
    </textarea>
</div>