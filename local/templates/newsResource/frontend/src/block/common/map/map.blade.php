<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    <div class="{{ $block->elem('map') }}" id="map">
        <div class="{{ $block->elem('my-popup') }}" id="my-popup">
        </div>
    </div>
    <div class="{{ $block->elem('info-office') }}" id="info-office">
        {!! $officeTulaInfo !!}
    </div>
</div>