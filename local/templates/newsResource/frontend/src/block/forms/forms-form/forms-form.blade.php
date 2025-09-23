<div class="{{ $block->mod($mods ?? []) }}@if($class ?? false) {{ $class }}@endif">
    <form class="{{ $block->elem('form-container') }}" action="{{ $postFormActionUri }}" method="{{ $method }}" id="form">
        {!! bitrix_sessid_post() !!}
        <div id="errors" class="{{ $block->elem('error-container') }}" ></div>
        @foreach($fields as $field)
                {!! \TAO::frontend()->renderBlock(
                "forms/forms-" . $field['nameForm'],
                [
                    'field' => $field,
                    'arParams' => $arParams,
                ]
            ) !!}
        @endforeach
    </form>
</div>