<?php
/**
 * 使用前请使用composer安装workerman
 *
 * "require": {"workerman/workerman": "*"}
 */
return [
    'wm.http' => [
        'host'      => '127.0.0.1',
        'port'      => '8081',
        'set'       => [
            'count'      => 5,
            'name'       => 'wm-httpserver',
            'user'       => 'yeweijian',
            'reloadable' => true,
        ],
        'pidFile'   => __RUNTIME__ . '/worker/worker.pid',
        'logFile'   => __RUNTIME__ . '/worker/httpserver.log',
        'daemonize' => !__DEBUG__,
    ],
];
