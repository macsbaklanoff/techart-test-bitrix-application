<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    <label>{{ $field['label'] }}</label>
    <select name="{{ $field['name'] }}" id="{{ $field['id'] }}" >
        @foreach($field['themes'] as $theme)
            <option value="{{ $theme }}" >{{ $theme }}</option>
        @endforeach
    </select>
</div>