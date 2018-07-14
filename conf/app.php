<?php

return [
    'test'              => 'test',
    // 服务器参数
    "ServerHandler"     => Yef\Server\SwHttpHandler::class,
    // "ServerHandler" => Yef\Server\WmHttpHandler::class,
    "defaultRpcHandler" => "swooleRpcClentHandler",

    // 默认db配置
    'defaultDbConf'     => 'localDb',
];
