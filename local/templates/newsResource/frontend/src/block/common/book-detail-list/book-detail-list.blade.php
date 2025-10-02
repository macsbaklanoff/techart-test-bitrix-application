<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif" data-entity="{{ $containerName }}">
    <div class="{{ $block->elem('line') }}">
        {{ $header }}
    </div>
    <div class="{{ $block->elem('elements') }}" data-entity="items-row">
        @foreach($items as $item)
            {!! 
                            \TAO::frontend()->renderBlock(
                'common/book',
                [
                    'item' => $item,
                    'areaId' => $areaIds[$item['ID']],
                    'fontSize' => '13px',
                ],
            )
                        !!}
        @endforeach
    </div>
</div>