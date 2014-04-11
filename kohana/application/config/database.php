<?php

// string INSTANCE_NAME => array(
//     'type'         => string DATABASE_TYPE,
//     'connection'   => array CONNECTION_ARRAY,
//     'table_prefix' => string TABLE_PREFIX,
//     'charset'      => string CHARACTER_SET,
//     'profiling'    => boolean QUERY_PROFILING,
// ),



return array
(
    'default' => array
    (
        'type'       => 'mysql',
        'connection' => array(
            'hostname'   => 'localhost',
            'username'   => 'root',
            'password'   => 'valentin',
            'persistent' => FALSE,
            'database'   => 'usersio_gsb',
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'profiling'    => TRUE,
    ),
    'remote' => array(
        'type'       => 'mysql',
        'connection' => array(
            'hostname'   => 'mysql1.alwaysdata.com',
            'username'   => 'usersio',
            'password'   => 'mot de passe',
            'persistent' => FALSE,
            'database'   => 'usersio_gsb',
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'profiling'    => TRUE,
    ),
);






