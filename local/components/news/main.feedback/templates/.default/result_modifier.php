<?php

$fields = [
    [
        'nameForm' => 'input',
        'type' => 'text',
        'placeholder' => "Ваше имя",
        'name' => 'user_name',
        'needle' => "NAME",
        'id' => 'name-input',
        'required' => true,
    ],
    [
        'nameForm' => 'input',
        'type' => 'email',
        'placeholder' => "Ваш email",
        'name' => 'user_email',
        'needle' => "EMAIL",
        'id' => 'email-input',
        'required' => false,
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
        'required' => false,
    ],
    [
        'nameForm' => 'select',
        'type' => 'select',
        'label' => 'Выберите тему новости, которая вас интересует',
        'name' => 'news_theme',
        'themes' => $arResult['THEMES'],
        'id' => 'select',
        'required' => false,
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
        'id' => 'message-input',
        'required' => true,
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
