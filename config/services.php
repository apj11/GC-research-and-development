<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id'     => env('538756023512966'),
        'client_secret' => env('f56deef4b9e23dc068278c0e3019448a'),
        'redirect'      => env('https://localhost:8000/auth/callback/facebook'),
    ],
    'google' => [
        'client_id'     => env('875840277790-63vq9s61rmqq575koetqf0v5au2s06bs.apps.googleusercontent.com'),
        'client_secret' => env('5VeKL90qemdjn7hpQ8eAiFMb'),
        'redirect'      => env('http://localhost:8000/auth/google/callback'),
    ],
];
