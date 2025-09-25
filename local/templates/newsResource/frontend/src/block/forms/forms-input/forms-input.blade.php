<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    <div class="{{ $block->elem('info') }}">
        <p>{{ $field['placeholder'] }}:</p>
        {{ $message }}
        @if (empty($arParams['REQUIRED_FIELDS']) || in_array($field['needle'], $arParams["REQUIRED_FIELDS"]))
            <span class="{{ $block->elem('info__mf-req') }}">*</span>
        @endif
    </div>
    <input id="{{ $field['id'] }}" class="{{ $block->elem('text-input') }}" placeholder="{{ $field['placeholder'] }}"
        type="{{ $field['type'] }}" name="{{ $field['name'] }}" value="{{ $field['value'] }}">
</div>