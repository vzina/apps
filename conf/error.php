<?php

return [
    'NotFoundHandler' => function ($app) {
        return function () {
            return [404, 'fdafdadf'];
        };
    },
];
