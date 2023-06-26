<?php

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'desenvolvimento',
        'desenvolvimento' => [
            'adapter' => 'pgsql',
            'host' => 'localhost',
            'name' => 'banco_teste',
            'user' => 'postgres',
            'pass' => 'acesse',
            'port' => '5432',
            'charset' => 'utf8',
            'schema' => 'testando'
        ],
        'homologacao' => [
            'adapter' => 'pgsql',
            'host' => 'localhost',
            'name' => 'banco_teste',
            'user' => 'postgres',
            'pass' => 'acesse',
            'port' => '5432',
            'charset' => 'utf8',
        ],
        'compliance' => [
            'adapter' => 'pgsql',
            'host' => 'localhost',
            'name' => 'banco_teste',
            'user' => 'postgres',
            'pass' => 'acesse',
            'port' => '5432',
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
