<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Use wether offset or timezone string
    |--------------------------------------------------------------------------
    |
    | How would you like to calculate the locale timezone.
    | Based on UTC offset or Timezone string.
    | options ['offset', 'timezone']
    |
    */

    'calculate_method' => 'offset',

    /*
    |--------------------------------------------------------------------------
    | How to get timezone from client wether from cookie or form inputs
    |--------------------------------------------------------------------------
    |
    | How to get timezone from client wether from cookie or form inputs.
    | Get values from cookie set via js or get it via form inputs.
    | options ['cookie', 'form']
    |
    */

    'client_timezone_get_method' => 'form',
    // 'client_timezone_get_method' => 'cookie',

    'client_input_timezone_str' => 'tz',
    'client_input_timezone_offset' => 'offset',

    'client_ip_fetching_service' => env('CLIENT_IP_FETCHING_SERVICE', "https://api.ipify.org"),
    // Replace {#ip} with ip add on the fly
    // 'client_timezone_from_ip_fetching_service' => 'http://ip-api.com/json/{#ip}',
    'client_timezone_from_ip_fetching_service' => env('CLIENT_TIMEZONE_FROM_IP_FETCHING_SERVICE', 'https://ipapi.co/{$ip}/json'),

    /*
    |--------------------------------------------------------------------------
    | Overwrite Default Format
    |--------------------------------------------------------------------------
    |
    | Here you may configure if you would like to overwrite the
    | default format.
    |
    */

    'format' => 'jS F Y g:i:a',

];
