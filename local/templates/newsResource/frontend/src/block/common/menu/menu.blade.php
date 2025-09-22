<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
@if (!empty($arResult))
@php
    $previousLevel = 0;
@endphp
<ul id="horizontal-multilevel-menu">
        @foreach($arResult as $arItem)
            @if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel)
                {!! str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])) !!}
            @endif
            
            @if($arItem['IS_PARENT'])
                @if($arItem["DEPTH_LEVEL"] == 1)
                    <li><a href="{{ $arItem['LINK'] }}" class="{{ $arItem['SELECTED'] ? 
                    $block->elem('root-item-selected') :
                    $block->elem('root-item')
                    }}">{{ $arItem['TEXT'] }}</a>
                    <ul>
                @else
                    <li class="{{ $arItem['SELECTED'] ? $block->elem('item-selected li-item') : $block->elem('') }}">
                        <a href="{{ $arItem['LINK'] }}" class="{{ $block->elem('parent') }}">{{ $arItem['TEXT'] }}</a>
                    <ul>
                @endif
            @else
                @if ($arItem['PERMISSION'] > "D")
                    @if($arItem['DEPTH_LEVEL'] == 1)
                        <li class="{{ $block->elem('li-item') }}">
                            <a href="{{ $arItem['LINK'] }}" class="{{ $arItem['SELECTED'] ? $block->elem('root-item-selected') : $block->elem('root-item') }}">{{ $arItem['TEXT'] }}</a>
                        </li>
                    @else
                        <li class="{{ $arItem['SELECTED'] ? $block->elem('item-selected li-item') : $block->elem('') }}">
                            <a href="{{ $arItem['LINK'] }}">{{ $arItem['TEXT'] }}</a>
                        </li>
                    @endif
                @else
                    @if($arItem['DEPTH_LEVEL'] == 1)
                       <li>
                            <a href="" class="{{ $arItem['SELECTED'] ? $block->elem('root-item-selected') : $block->elem('root-item') }}" title="">{{ $arItem['TEXT'] }}</a>
                       </li>
                    @else
                       <li><a href="" class="{{ $block->elem('denied') }}">{{ $arItem['TEXT'] }}</a></li> 
                    @endif
                @endif
            @endif
            
            @php
                $previousLevel = $arItem['DEPTH_LEVEL'];
            @endphp
        @endforeach
        
        @if($previousLevel > 1)
            {!! str_repeat("</ul></li>", ($previousLevel - 1)) !!}
        @endif
    </ul>
@endif
</div>
