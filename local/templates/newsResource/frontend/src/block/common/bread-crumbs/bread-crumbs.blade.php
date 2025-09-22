<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    @php
    $last_key = array_key_last($breadCrumbs);
    @endphp
    @foreach($breadCrumbs as $key => $breadCrumb)
        @if ($key !== $last_key)
            <a href="{{ $breadCrumb['url'] }}" class="{{ $block->elem('item') }}" >{{ $breadCrumb['title'] }}</a> /            
        @else
        <span class="{{ $block->elem('last') }}" >{{ $breadCrumb['title'] }}</span>
        @endif
    @endforeach
</div>
