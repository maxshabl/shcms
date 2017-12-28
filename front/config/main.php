<?php
/** Сервисы, попадающие в контейнер при запуске приложения*/
return [
    'services' => [
        [
            'class' => Engine\Db\DbService::class,
            'key' => 'mysql1',
            'user' => 'root',
            'password' => '',
            'dsn' => ''
        ],
        [
            'class' => Engine\Db\DbService::class,
            'key' => 'postgre1',
            'user' => 'root',
            'password' => '',
            'dsn' => ''
        ],
        [
            'class' => Engine\Db\DbService::class,
            'key' => 'sqlite1',
            'user' => 'root',
            'password' => '',
            'dsn' => ''
        ]
    ]
];
