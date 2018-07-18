<?php

/**
 * This file is part of Swoft.
 * (c) Swoft <group@swoft.org>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'master' => [
        'name'        => 'master',
        'uri'         => [
            '127.0.0.1:3306/supply_fandow_com?user=root&password=wumahooo&charset=utf8',
            //'127.0.0.1:3306/test?user=root&password=wumahoo&charset=utf8',
        ],
        'minActive'   => 8,
        'maxActive'   => 8,
        'maxWait'     => 8,
        'timeout'     => 8,
        'maxIdleTime' => 60,
        'maxWaitTime' => 3,
        'prefix'      => 'sup_',
    ],

    'slave' => [
        'name'        => 'slave',
        'uri'         => [
            '127.0.0.1:3306/supply_fandow_com?user=root&password=wumahooo&charset=utf8',
            //'127.0.0.1:3306/supply_fandow_com?user=root&password=wumahoo&charset=utf8',
        ],
        'minActive'   => 8,
        'maxActive'   => 8,
        'maxWait'     => 8,
        'timeout'     => 8,
        'maxIdleTime' => 60,
        'maxWaitTime' => 3,
        'prefix'      => 'sup_',
    ],
];