<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    <input class="{{ $block->elem('submit-button') }}" type="{{ $field['type'] }}" name="{{ $field['name'] }}" id="{{ $field['id'] }}" ></input>
</div>