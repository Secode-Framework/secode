<?php

$string = file_get_contents(seCodePath("environments.json"));
$enviroments = json_decode($string, true);
$paths = [];
foreach ($enviroments as $enviroment) {
    $paths[] = $enviroment . '/api/*';
    $paths[] = $enviroment . '/checkEnvironment';
}
return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => array_merge($paths, ['api/*', 'sanctum/csrf-cookie']),

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
