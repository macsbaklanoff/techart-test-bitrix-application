<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    <div class="{{ $block->elem('reference') }}">
        <p class="{{ $block->elem('office-tula') }}" id="office-tula">Офис в Туле</p>
        <p class="{{ $block->elem('office-moscow') }}" id="office-moscow">Офис в Москве</p>
    </div>
    <div class="{{ $block->elem('map') }}" id="map">
        <div class="{{ $block->elem('my-popup') }}" id="my-popup">
        </div>
    </div>
    {!! 
    \TAO::frontend()->renderBlock(
        'common/map-tula',
        [],
    )
     !!}
    {!! 
    \TAO::frontend()->renderBlock(
        'common/map-moscow',
        [],
    )
     !!}
</div>