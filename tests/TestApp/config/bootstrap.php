<?php
declare(strict_types=1);

use Cake\Broadcasting\Broadcasting;
use Cake\Core\Configure;

/**
 * Test Application Bootstrap
 *
 * This file is used to configure the test application for broadcasting tests.
 * It sets up the broadcasting configuration and loads necessary plugins.
 */

Configure::write('Broadcasting', [
    'channels_file' => __DIR__ . DS . 'channels.php',
    'default' => 'pusher',
    'connections' => [
        'null' => [
            'className' => 'Cake/Broadcasting.Null',
        ],
        'log' => [
            'className' => 'Cake/Broadcasting.Log',
        ],
        'pusher' => [
            'className' => 'Cake/Broadcasting.Pusher',
            'key' => 'test-key',
            'secret' => 'test-secret',
            'app_id' => 'test-app-id',
            'options' => [
                'cluster' => 'mt1',
                'useTLS' => false,
                'host' => 'localhost',
                'port' => 6001,
                'scheme' => 'http',
            ],
        ],
    ],
]);

Broadcasting::setConfig('log', [
    'className' => 'Cake/Broadcasting.Log',
]);

Broadcasting::setConfig('null', [
    'className' => 'Cake/Broadcasting.Null',
]);

Broadcasting::setConfig('default', [
    'className' => 'Cake/Broadcasting.Log',
]);

Broadcasting::setConfig('pusher', [
    'className' => 'Cake/Broadcasting.Log',
]);
