<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">

        <div class="{{ $block->elem('header') }}">
            <h4>{{ $header }}</h4>
        </div>
        <div class="{{ $block->elem('line') }}"></div>
        <div class="{{ $block->elem('elements') }}">
            @foreach($items as $item)
                    {!! 
                        \TAO::frontend()->renderBlock(
                    'common/book',
                    [
                        'item' => $item,
                        'areaId' => $areaIds[$item['ID']],
                    ],
                )
                    !!}
            @endforeach
        </div>

</div>