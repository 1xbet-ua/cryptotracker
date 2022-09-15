<?php

defined( 'GECKO_CLIENT_VERSION' ) OR exit( 'No direct script access allowed' );

$footer['show'] = TRUE;

/*
| -------------------------------------------------------------------------
| LINKS
| -------------------------------------------------------------------------
|
| TYPE: array[]
| DESCRIPTION: Footer links details.
|
| -------------------------------------------------------------------------
| EXPLANATION OF LINK PARAMETERS
| -------------------------------------------------------------------------
|
|   ['text']        (string)    Text label
|   ['icon']        (string)    Icon class name (mdi-*). Icons: https://materialdesignicons.com/
|   ['route']       (string)    Route name.
|   ['url']         (string)    Link URL (when not a route)
|   ['external']    (bool)      Set TRUE to open URL in new window (if URL is provided).
|
*/
$footer['links'] = [
    [
        'text' => 'About Us',
        'route' => 'about',
    ],
    [
        'text' => 'Terms',
        'route' => 'terms',
    ],
    [
        'text' => 'Privacy Policy',
        'route' => 'privacy-policy',
    ],
    [
        'text' => 'Cookies Policy',
        'route' => 'cookies-policy',
    ],
];

$footer['copyrights'] = '&copy; 2022 Investio Client - All rights reserved';



