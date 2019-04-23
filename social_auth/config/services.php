<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
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

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    #--- Social authentication driver & api information ---#

    'facebook' => [
        'client_id' => '',        // facebook client id
        'client_secret' => '',   // facebook client secret
        'redirect' => '',       // redirect url where user back after successfully login (must be https)
    ],

    'twitter' => [
        'client_id' => '',        // twitter client id
        'client_secret' => '',   // twitter client secret
        'redirect' => '',       // redirect url where user back after successfully login
    ],

    'instagram' => [
        'client_id' => '',        // instagram client id
        'client_secret' => '',   // instagram client secret
        'redirect' => '',       // redirect url where user back after successfully login
    ],

    'linkedin' => [
        'client_id' => '',        // linkedin client id
        'client_secret' => '',   // linkedin client secret
        'redirect' => '',       // redirect url where user back after successfully login
    ],

    'github' => [
        'client_id' => '',        // github client id
        'client_secret' => '',   // github client secret
        'redirect' => '',       // redirect url where user back after successfully login
    ],

    'bitbucket' => [
        'client_id' => '',        // bitbucket client id
        'client_secret' => '',   // bitbucket client secret
        'redirect' => '',       // redirect url where user back after successfully login
    ],

];
