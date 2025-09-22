<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    <a href="{{ $news['DETAIL_PAGE_URL'] }}" class="{{ $block->elem('item') }}" >
            {!! \TAO::frontend()->renderBlock(
                'common/date-news',
                [
                    'date' => $news['ACTIVE_FROM']
                ],
            ) !!}
            <h5 class="{{ $block->elem('item__title') }}" >{{ $news['NAME'] }}</h5>
            <div class={{ $block->elem('item__announce') }} >{!! $news['~PREVIEW_TEXT'] !!}</div>
            <button class="{{ $block->elem('item__button-more') }}" >
                Подробнее
                <img class="{{ $block->elem('item__button-more__image') }}" src="/upload/icons/arrow-more.png">
            </button>
        </a>
</div>