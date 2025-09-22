<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    <img class="{{ $block->elem('image') }}" src="<?= $news['DETAIL_PICTURE']['SRC'] ?>"
        alt="<?= htmlspecialchars($news['DETAIL_PICTURE']['ALT'] ?? $news['NAME']) ?>"
        title="<?= htmlspecialchars($news['DETAIL_PICTURE']['TITLE'] ?? $news['NAME']) ?>" />
    <div class="{{ $block->elem('info') }}">
        <h4 class="{{ $block->elem('info__title') }}">{{ $news['~NAME'] }}</h4>
        <div class="{{ $block->elem('info__description') }}">{!! $news['~PREVIEW_TEXT'] !!}</div>
    </div>
</div>