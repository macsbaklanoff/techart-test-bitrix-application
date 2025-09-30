<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif" data-entity="catalog-top-container">
        @foreach($arResult['ITEMS'] as $item)
                {!! \TAO::frontend()->renderBlock(
                'common/book',
                [
                    'item' => $item,
                    'areaId' =>  $areaIds[$item['ID']]
                ]
            ) !!}
        @endforeach
</div>