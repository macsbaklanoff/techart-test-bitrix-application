<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    @if ($isFilter || $isSidebar)
        <div class="{{ $block->elem('col-md') }}" >
            @if($isFilter)
                <div class="{{ $block->elem('sidebar-block') }}" >
                    {!! $catalogSmartFilter !!}
                </div>
            @endif
            @if ($isSidebar)
                <div class="{{ $block->elem('hidden-xs') }}" >
                    {!! $mainInclude !!}
                </div>
            @endif
        </div>
    @endif
    <div class="{{ $block->elem('books') }}" >
        {!! $catalogSectionOne !!}
    </div>
</div>