<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => env('FACEBOOK-ID'),
        'client_secret' => env('FACEBOOK-SECRECT'),
        'redirect' => env('FACEBOOK-CALLBACK-URL'),
    ],

    'google' => [
        'client_id' => env('GOOGLE-ID'),
        'client_secret' => env('GOOGLE-SECRECT'),
        'redirect' => env('GOOGLE-CALLBACK-URL'),
    ],

    'github' => [
        'client_id' => env('GITHUB-ID'),
        'client_secret' => env('GITHUB-SECRECT'),
        'redirect' => env('GITHUB-CALLBACK-URL'),
    ],

];
