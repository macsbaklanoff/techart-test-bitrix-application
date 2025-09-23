<?php

$fields = [
    [
        'nameForm' => 'input',
        'type' => 'text',
        'placeholder' => "Ваше имя",
        'name' => 'user_name',
        'value' => '',
        'message' => '',
        'needle' => "NAME",
        'id' => 'name-input'
    ],
    [
        'nameForm' => 'input',
        'type' => 'email',
        'placeholder' => "Ваш email",
        'name' => 'user_email',
        'value' => '',
        'message' => '',
        'needle' => "EMAIL",
        'id' => 'email-input',
    ],
    [
        'nameForm' => 'input',
        'type' => 'text',
        'placeholder' => "Ваш телефон",
        'name' => 'phone',
        'value' => '',
        'message' => '',
        'needle' => "EMAIL",
        'id' => 'phone-input',
    ],
    [
        'nameForm' => 'select',
        'type' => 'select',
        'label' => 'Выберите тему новости, которая вас интересует',
        'name' => 'news_theme',
        'themes' => $arResult['THEMES'],
        'id' => 'select',
    ],
    [
        'nameForm' => 'textarea',
        'type' => 'message',
        'label' => 'Ваше сообщение',
        'name' => 'MESSAGE',
        'rows' => '5',
        'cols' => '40',
        'arResultMessage' => $arResult['MESSAGE'],
        'message' => '',
        'needle' => 'MESSAGE',
        'id' => 'message-input'
    ],
    [
        'nameForm' => 'submit-button',
        'type' => 'submit', //submit
        'name' => 'submit',
        'value' => 'Отправить',
        'id' => 'submit-button'
    ]
];

$arResult['FIELDS'] = $fields;
