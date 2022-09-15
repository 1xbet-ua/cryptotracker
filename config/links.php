<?php


defined( 'GECKO_CLIENT_VERSION' ) OR exit( 'No direct script access allowed' );

/*
| -------------------------------------------------------------------------
| CURRENCIES
| -------------------------------------------------------------------------
| TYPE: array
| DESCRIPTION: Currencies custom URLs.
| KEY: Currency ID. For example: 'binancecoin' for Binance Coin ("/currency/binancecoin").
| VALUE: Custom URL.
|
| -------------------------------------------------------------------------
| EXAMPLE:
| -------------------------------------------------------------------------
|
|   $links['currencies'] = [
|       'bitcoin'  => 'https://www.binance.com/en/trade/BTC_USDT?ref=13638805',
|       'ethereum' => 'https://www.binance.com/en/trade/ETH_USDT?ref=13638805',
|   ];
|
*/
$links['currencies'] = [
'bitcoin'  => 'https://www.binance.com/en/trade/BTC_USDT?ref=13638805',
'ethereum' => 'https://www.binance.com/en/trade/ETH_USDT?ref=13638805',
'tether' => 'https://www.binance.com/en/trade/BTC_USDT?ref=13638805',
'terra-luna' => 'https://www.binance.com/en/trade/LUNA_USDT?ref=13638805',
'terrausd' => 'https://www.binance.com/en/trade/LUNA_USDT?ref=13638805',
'solana' => 'https://www.binance.com/en/trade/SOL_USDT?ref=13638805',
'usd-coin' => 'https://www.binance.com/en/trade/USDC_USDT?ref=13638805',
'binancecoin' => 'https://www.binance.com/en/trade/BNB_USDT?ref=13638805',

'ripple' => 'https://www.binance.com/en/trade/XRP_USDT?ref=13638805',
'cardano' => 'https://www.binance.com/en/trade/ADA_USDT?ref=13638805',
'binance-usd' => 'https://www.binance.com/en/trade/BUSD_USDT?ref=13638805',
'polkadot' => 'https://www.binance.com/en/trade/DOT_USDT?ref=13638805',
'dogecoin' => 'https://www.binance.com/en/trade/DOGE_USDT?ref=13638805',
'avalanche-2' => 'https://www.binance.com/en/trade/AVAX_USDT?ref=13638805',
'wrapped-bitcoin' => 'https://www.binance.com/en/trade/WBTC_USDT?ref=13638805',
'staked-ether' => 'https://www.binance.com/en/trade/STETH_USDT?ref=13638805',
'shiba-inu' => 'https://www.binance.com/en/trade/SHIB_USDT?ref=13638805',
'tron' => 'https://www.binance.com/en/trade/TRX_USDT?ref=13638805',






];

/*
| -------------------------------------------------------------------------
| EXCHANGES
| -------------------------------------------------------------------------
| TYPE: array
| DESCRIPTION: Exchange custom URLs. Tickers will not be replaced.
| KEY: Exchange ID. For example: 'gdax' for Coinbase Exchange ("/exchange/gdax").
| VALUE: Custom URL.
|
| -------------------------------------------------------------------------
| EXAMPLE:
| -------------------------------------------------------------------------
|
|   $links['exchanges'] = [
|       'binance'  => 'https://www.binance.com/en/register?ref=13638805',
|       'bitfinex' => 'https://bitfinex.com/?refcode=27pDIjdk4',
|   ];
|
*/
$links['exchanges'] = [
'binance'  => 'https://www.binance.com/en/register?ref=13638805',
];

/*
| -------------------------------------------------------------------------
| FINANCE PLATFORMS
| -------------------------------------------------------------------------
| TYPE: array
| DESCRIPTION: Finance platform custom URLs.
| KEY: Platform name. For example: 'Binance Savings'.
| VALUE: Custom URL.
|
| -------------------------------------------------------------------------
| EXAMPLE:
| -------------------------------------------------------------------------
|
|   $links['finance_platforms'] = [
|       'Binance Savings' => 'https://www.binance.com/en/savings?ref=13638805',
|       'Binance Staking' => 'https://www.binance.com/en/pos?ref=13638805',
|   ];
|
*/
$links['finance_platforms'] = [
'Binance Savings' => 'https://www.binance.com/en/savings?ref=13638805',
'Binance Staking' => 'https://www.binance.com/en/pos?ref=13638805',
];

/*
| -------------------------------------------------------------------------
| DERIVATIVES MARKETS
| -------------------------------------------------------------------------
| TYPE: array
|
| DESCRIPTION:
| Derivatives Market custom URLs.
| CoinGecko API does not provide URLs in /v3/derivatives endpoint response,
| so these with the only ones available.
|
| KEY: Market name. For example: 'Binance (Futures)'.
|
| VALUE: Custom URL.
|
| -------------------------------------------------------------------------
| EXAMPLE:
| -------------------------------------------------------------------------
|
|   $links['derivatives_markets'] = [
|       'Binance (Futures)' => 'https://www.binance.com/en/futures?ref=13638805',
|       'Huobi Futures' => 'https://futures.huobi.com/?invite_code=9t3n2223',
|   ];
|
*/
$links['derivatives_markets'] = [
 'Binance (Futures)' => 'https://www.binance.com/en/futures?ref=13638805',
];