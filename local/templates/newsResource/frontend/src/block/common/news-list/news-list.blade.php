<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    @foreach ($arResult['ITEMS'] as $news)
        {!! \TAO::frontend()->renderBlock(
            'common/news-item',
            ['news' => $news],
        ) !!}
    @endforeach
</div>