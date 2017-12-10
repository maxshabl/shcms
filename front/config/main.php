<?php

/*
 * services - list of services
 * database - provider name,
 * mysql - service name
 * name - example class name, if you need make more then one
 *
 */
return [
    'services' => [
        'DatabaseProvider' => [
            'mysql' => [
            'name' => 'db1',
            'user' => 'root',
            'password' => '',
            'dsn' => ''
            ],
        ],
    ]
];
