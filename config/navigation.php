<?php

defined( 'GECKO_CLIENT_VERSION' ) OR exit( 'No direct script access allowed' );

/*
| -------------------------------------------------------------------------
| ITEMS
| -------------------------------------------------------------------------
|
| TYPE: array[]
| DESCRIPTION: Side navigation menu items details.
|
| -------------------------------------------------------------------------
| EXPLANATION OF ITEM PARAMETERS
| -------------------------------------------------------------------------
|
|   ['text']        (string)    Text label
|   ['icon']        (string)    Icon class name (mdi-*). Icons: https://materialdesignicons.com/
|   ['route']       (string)    Route name.
|   ['url']         (string)    Link URL (when not a route)
|   ['external']    (bool)      Set TRUE to open URL in new window (if URL is provided).
|   ['divider']     (string)    Use 'before' or 'after' to add a divider.
|   ['items']       (array[])   Submenu items. Can set text, icon, route/url and external params.
|
*/
$navigation['items'] = [
    [
        'text' => 'Cryptocurrencies',
        'icon' => 'mdi-cash-lock',
        'route' => 'currencies',
    ],
    [
        'text' => 'Exchanges',
        'icon' => 'mdi-swap-vertical-bold',
        'route' => 'exchanges',
    ],
    [
        'text' => 'Derivatives',
        'icon' => 'mdi-progress-clock',
        'route' => 'derivatives',
    ],
 [
        'text' => 'Spiele Krypto DE',
        'icon' => 'mdi-hand-pointing-right',
        'url' => 'https://spielekrypto.de/',
        'external' => TRUE,
        'divider' => 'before',
    ],
 [
        'text' => 'Guides from Tiktok & Instagram',
        'icon' => 'mdi-tumblr',
        'url' => 'https://teleguide.net/',
        'external' => TRUE,
        'divider' => 'before',
    ],
 [
        'text' => 'Review Wireless Headphones',
        'icon' => 'mdi-headphones',
        'url' => 'https://headphoneswireless.co.uk/',
        'external' => TRUE,
        'divider' => 'before',
    ],
   
];
