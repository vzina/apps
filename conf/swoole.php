<?php
return [
    'sw.http' => [
        'host' => '127.0.0.1',
        'port' => '8081',
        'set'  => [
            'reactor_num'           => 2, //reactor thread num
            'worker_num'            => 4, //worker process num
            'backlog'               => 128, //listen backlog
            'max_request'           => 100,
            'dispatch_mode'         => 1,
            'document_root'         => __ROOT__ . '/public/static',
            'enable_static_handler' => true,
            'daemonize'             => false,
        ],
    ],
];
