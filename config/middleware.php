<?php

return [
    'switch' => \SwFwLess\components\Helper::envBool('MIDDLEWARE_SWITCH', false),
    'middleware' => [
//        \SwFwLess\middlewares\Trace::class,
//        \SwFwLess\components\zipkin\Middleware::class,
//        \SwFwLess\components\chaos\Middleware::class,
//        \SwFwLess\middlewares\Cors::class,
//        \SwFwLess\components\auth\Middleware::class,
//        \SwFwLess\middlewares\IpRestriction::class,
    ],
    'routeMiddleware' => [
//        \SwFwLess\components\ratelimit\Middleware::class,
    ],
    'aliases' => [
        'cors' => \SwFwLess\middlewares\Cors::class,
        'auth' => \SwFwLess\components\auth\Middleware::class,
    ],
];
