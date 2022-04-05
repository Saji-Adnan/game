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
     'client_id' => '1802189406629719',
     'client_secret' => 'e5919b0b4aa126913f2b8d0fb0d675c9',
     'redirect' => 'http://shobati.com/callback/facebook',
   ], 
   'google' => [
        'client_id'     => '620459907294-t1d60dthfqdq821v8u7jv11qtst34eee.apps.googleusercontent.com',
        'client_secret' => 'F2zlGxAcJaFCgBWOtYQNskAp',
        'redirect'      => 'http://shobati.com/callback/google',
],

];
