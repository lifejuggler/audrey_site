<?php

return array(
    'default-connection' => 'concrete',
    'connections' => array(
        'concrete' => array(
            'driver' => 'c5_pdo_mysql',
            'server' => 'localhost',
            'database' => 'tastytours',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ),
    ),
);
