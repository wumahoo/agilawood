<?php

/*
 * This file is part of Swoft.
 * (c) Swoft <group@swoft.org>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'user' => [
        'name'        => 'redis',
        'uri'         => [
            '127.0.0.1:8099',
            '127.0.0.1:8099',
        ],
        'minActive'   => 8, //最小活跃链接数
        'maxActive'   => 8, //最大活跃连接数
        'maxWait'     => 8, //最大等待连接
        'maxWaitTime' => 3, // 连接最大空闲时间，单位秒
        'maxIdleTime' => 60, //连接最大等待时间，单位秒
        'timeout'     => 8, //超时时间，单位秒
        'useProvider' => false,
        'balancer' => 'random',
        'provider' => 'consul',
    ]
];