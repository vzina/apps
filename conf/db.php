<?php
use Medoo\Medoo;
return [
    'localDb'  => [
        'database_type' => 'mysql',
        'database_name' => 'test',
        'master'        => '127.0.0.1',
        'slave'         => ['127.0.0.1'],
        'username'      => 'root',
        'password'      => 'root',
    ],

    'localDb2' => [
        'database_type' => 'mysql',
        'database_name' => 'test',
        'master'        => '127.0.0.1',
        'slave'         => ['127.0.0.1'],
        'username'      => 'root',
        'password'      => 'root',
    ],

    // 懒加载
    'db'       => function ($app) {
        return $app->factory(function ($defaultConfName = '', $isMaster = false) {
            $defaultConfName = $defaultConfName ?: app('defaultDbConf', null, 'localDb');
            if (!$conf = app($defaultConfName)) {
                return false;
            }
            $conf['server'] = $conf['master'];
            if (!$isMaster) {
                $conf['server'] = $conf['slave'][array_rand($conf['slave'], 1)];
            }
            // Initialize
            return new Medoo($conf);
        });
    },
];
