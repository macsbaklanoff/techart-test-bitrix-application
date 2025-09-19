<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    <a  href="/" class="{{ $block->elem('info') }}">
        <img class="{{ $block->elem('icon') }}" src="/upload/icons/logo 1.svg" />
        <p class="{{ $block->elem('headline') }}">ГАЛАКТИЧЕСКИЙ ВЕСТНИК</p>
        <p class="{{ $block->elem('label-name') }}">{{ !empty($userName) ? 'Имя: ' . $userName : '' }}</p>
    </a>
    <div class="{{ $block->elem('menu') }}" >
        {!! $menu !!}
    </div>
</div>