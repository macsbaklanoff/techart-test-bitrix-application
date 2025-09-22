<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    <?=
        \TAO::frontend()->renderBlock(
            'common/line',
            [],
        )
        ?>
    <p class="{{ $block->elem("footer-info") }}" >© 2023 — 2412 «Галактический вестник»</p>
</div>