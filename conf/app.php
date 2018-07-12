<?php

return [
    'test'              => 'test',
    // 服务器参数
    "ServerHandler"     => Yef\HttpServer\SwHttpHandler::class,
    // "httpServerHandler" => Yef\HttpServer\WmHttpHandler::class,
    "defaultRpcHandler" => "swooleRpcClentHandler",

    // 默认db配置
    'defaultDbConf'     => 'localDb',

    'log'               => function ($app) {
        $file = __RUNTIME__ . '/app/' . date('Ymd') . '.log';
        // create a log channel
        $log = new Monolog\Logger('app');
        $log->pushHandler(new Monolog\Handler\StreamHandler($file, Monolog\Logger::DEBUG));
        return $log;
    },
];
