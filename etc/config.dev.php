<?php

return array(
    'db' => array(
        'host' => 'localhost',
        'name' => 'message',
        'user' => 'root',
        'password' => null,
    ),
    'auth' => array(
        'gAuth' => array(
            'clientId' => '%clientId%',
            'clientSecret' => '%clientSecret%',
            'developerKey' => '%developerKey%',
        ),
        'login' => 'leonov.me@gmail.com',
    ),
    'base' => array(
        'vleonov.me' => '/photo',
    ),
    'sms' => array(
        'host' => 'http://api.sms24x7.ru/',
        'email' => '%email%',
        'password' => '%password%',
    ),
);