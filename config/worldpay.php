<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Default Server is sandbox
    |--------------------------------------------------------------------------
    |
    | This option controls the server "sandbox" and "live" that will be used on
    | requests.
    |
    | Supported: "sandbox", "live"
    |
    */
    'server' => "sandbox",
    /*
    |--------------------------------------------------------------------------
    | Sandbox Key
    |--------------------------------------------------------------------------
    |
    | Sandbox account credentials from developer portal set the service and
    | client key
    |
    */
    'sandbox' => array(
        'service' => 'T_C_51c5f1c5-f24e-400d-9271-0e91d0818a4e',
        'client'  => 'T_S_eda5abaf-ba8e-4bb4-8ecf-1fb8f6ae8a16',
    ),
    /*
    |--------------------------------------------------------------------------
    | Live Key
    |--------------------------------------------------------------------------
    |
    | live account credentials from developer portal set the service and
    | client key
    |
    */
    'live' => array(
        'service' => 'T_C_8b253cda-26d5-4917-bc39-6224c07d63tc',
        'client'  => 'T_C_8b253cda-26d5-4917-bc39-6224c07d63tc',
    ),
];