<?php

namespace ccxt;

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

class bitbay extends Exchange {

    public function describe () {
        return array_replace_recursive (parent::describe (), array (
            'id' => 'bitbay',
            'name' => 'BitBay',
            'countries' => array ( 'PL', 'EU' ), // Poland
            'rateLimit' => 1000,
            'has' => array (
                'CORS' => true,
                'withdraw' => true,
            ),
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766132-978a7bd8-5ece-11e7-9540-bc96d1e9bbb8.jpg',
                'www' => 'https://bitbay.net',
                'api' => array (
                    'public' => 'https://bitbay.net/API/Public',
                    'private' => 'https://bitbay.net/API/Trading/tradingApi.php',
                ),
                'doc' => array (
                    'https://bitbay.net/public-api',
                    'https://bitbay.net/account/tab-api',
                    'https://github.com/BitBayNet/API',
                ),
                'fees' => 'https://bitbay.net/en/fees',
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        '{id}/all',
                        '{id}/market',
                        '{id}/orderbook',
                        '{id}/ticker',
                        '{id}/trades',
                    ),
                ),
                'private' => array (
                    'post' => array (
                        'info',
                        'trade',
                        'cancel',
                        'orderbook',
                        'orders',
                        'transfer',
                        'withdraw',
                        'history',
                        'transactions',
                    ),
                ),
            ),
            'markets' => array (
                'BTC/USD' => array ( 'id' => 'BTCUSD', 'symbol' => 'BTC/USD', 'base' => 'BTC', 'quote' => 'USD', 'baseId' => 'BTC', 'quoteId' => 'USD' ),
                'BTC/EUR' => array ( 'id' => 'BTCEUR', 'symbol' => 'BTC/EUR', 'base' => 'BTC', 'quote' => 'EUR', 'baseId' => 'BTC', 'quoteId' => 'EUR' ),
                'BTC/PLN' => array ( 'id' => 'BTCPLN', 'symbol' => 'BTC/PLN', 'base' => 'BTC', 'quote' => 'PLN', 'baseId' => 'BTC', 'quoteId' => 'PLN' ),
                'LTC/USD' => array ( 'id' => 'LTCUSD', 'symbol' => 'LTC/USD', 'base' => 'LTC', 'quote' => 'USD', 'baseId' => 'LTC', 'quoteId' => 'USD' ),
                'LTC/EUR' => array ( 'id' => 'LTCEUR', 'symbol' => 'LTC/EUR', 'base' => 'LTC', 'quote' => 'EUR', 'baseId' => 'LTC', 'quoteId' => 'EUR' ),
                'LTC/PLN' => array ( 'id' => 'LTCPLN', 'symbol' => 'LTC/PLN', 'base' => 'LTC', 'quote' => 'PLN', 'baseId' => 'LTC', 'quoteId' => 'PLN' ),
                'LTC/BTC' => array ( 'id' => 'LTCBTC', 'symbol' => 'LTC/BTC', 'base' => 'LTC', 'quote' => 'BTC', 'baseId' => 'LTC', 'quoteId' => 'BTC' ),
                'ETH/USD' => array ( 'id' => 'ETHUSD', 'symbol' => 'ETH/USD', 'base' => 'ETH', 'quote' => 'USD', 'baseId' => 'ETH', 'quoteId' => 'USD' ),
                'ETH/EUR' => array ( 'id' => 'ETHEUR', 'symbol' => 'ETH/EUR', 'base' => 'ETH', 'quote' => 'EUR', 'baseId' => 'ETH', 'quoteId' => 'EUR' ),
                'ETH/PLN' => array ( 'id' => 'ETHPLN', 'symbol' => 'ETH/PLN', 'base' => 'ETH', 'quote' => 'PLN', 'baseId' => 'ETH', 'quoteId' => 'PLN' ),
                'ETH/BTC' => array ( 'id' => 'ETHBTC', 'symbol' => 'ETH/BTC', 'base' => 'ETH', 'quote' => 'BTC', 'baseId' => 'ETH', 'quoteId' => 'BTC' ),
                'LSK/USD' => array ( 'id' => 'LSKUSD', 'symbol' => 'LSK/USD', 'base' => 'LSK', 'quote' => 'USD', 'baseId' => 'LSK', 'quoteId' => 'USD' ),
                'LSK/EUR' => array ( 'id' => 'LSKEUR', 'symbol' => 'LSK/EUR', 'base' => 'LSK', 'quote' => 'EUR', 'baseId' => 'LSK', 'quoteId' => 'EUR' ),
                'LSK/PLN' => array ( 'id' => 'LSKPLN', 'symbol' => 'LSK/PLN', 'base' => 'LSK', 'quote' => 'PLN', 'baseId' => 'LSK', 'quoteId' => 'PLN' ),
                'LSK/BTC' => array ( 'id' => 'LSKBTC', 'symbol' => 'LSK/BTC', 'base' => 'LSK', 'quote' => 'BTC', 'baseId' => 'LSK', 'quoteId' => 'BTC' ),
                'BCH/USD' => array ( 'id' => 'BCCUSD', 'symbol' => 'BCH/USD', 'base' => 'BCH', 'quote' => 'USD', 'baseId' => 'BCC', 'quoteId' => 'USD' ),
                'BCH/EUR' => array ( 'id' => 'BCCEUR', 'symbol' => 'BCH/EUR', 'base' => 'BCH', 'quote' => 'EUR', 'baseId' => 'BCC', 'quoteId' => 'EUR' ),
                'BCH/PLN' => array ( 'id' => 'BCCPLN', 'symbol' => 'BCH/PLN', 'base' => 'BCH', 'quote' => 'PLN', 'baseId' => 'BCC', 'quoteId' => 'PLN' ),
                'BCH/BTC' => array ( 'id' => 'BCCBTC', 'symbol' => 'BCH/BTC', 'base' => 'BCH', 'quote' => 'BTC', 'baseId' => 'BCC', 'quoteId' => 'BTC' ),
                'BTG/USD' => array ( 'id' => 'BTGUSD', 'symbol' => 'BTG/USD', 'base' => 'BTG', 'quote' => 'USD', 'baseId' => 'BTG', 'quoteId' => 'USD' ),
                'BTG/EUR' => array ( 'id' => 'BTGEUR', 'symbol' => 'BTG/EUR', 'base' => 'BTG', 'quote' => 'EUR', 'baseId' => 'BTG', 'quoteId' => 'EUR' ),
                'BTG/PLN' => array ( 'id' => 'BTGPLN', 'symbol' => 'BTG/PLN', 'base' => 'BTG', 'quote' => 'PLN', 'baseId' => 'BTG', 'quoteId' => 'PLN' ),
                'BTG/BTC' => array ( 'id' => 'BTGBTC', 'symbol' => 'BTG/BTC', 'base' => 'BTG', 'quote' => 'BTC', 'baseId' => 'BTG', 'quoteId' => 'BTC' ),
                'DASH/USD' => array ( 'id' => 'DASHUSD', 'symbol' => 'DASH/USD', 'base' => 'DASH', 'quote' => 'USD', 'baseId' => 'DASH', 'quoteId' => 'USD' ),
                'DASH/EUR' => array ( 'id' => 'DASHEUR', 'symbol' => 'DASH/EUR', 'base' => 'DASH', 'quote' => 'EUR', 'baseId' => 'DASH', 'quoteId' => 'EUR' ),
                'DASH/PLN' => array ( 'id' => 'DASHPLN', 'symbol' => 'DASH/PLN', 'base' => 'DASH', 'quote' => 'PLN', 'baseId' => 'DASH', 'quoteId' => 'PLN' ),
                'DASH/BTC' => array ( 'id' => 'DASHBTC', 'symbol' => 'DASH/BTC', 'base' => 'DASH', 'quote' => 'BTC', 'baseId' => 'DASH', 'quoteId' => 'BTC' ),
                'GAME/USD' => array ( 'id' => 'GAMEUSD', 'symbol' => 'GAME/USD', 'base' => 'GAME', 'quote' => 'USD', 'baseId' => 'GAME', 'quoteId' => 'USD' ),
                'GAME/EUR' => array ( 'id' => 'GAMEEUR', 'symbol' => 'GAME/EUR', 'base' => 'GAME', 'quote' => 'EUR', 'baseId' => 'GAME', 'quoteId' => 'EUR' ),
                'GAME/PLN' => array ( 'id' => 'GAMEPLN', 'symbol' => 'GAME/PLN', 'base' => 'GAME', 'quote' => 'PLN', 'baseId' => 'GAME', 'quoteId' => 'PLN' ),
                'GAME/BTC' => array ( 'id' => 'GAMEBTC', 'symbol' => 'GAME/BTC', 'base' => 'GAME', 'quote' => 'BTC', 'baseId' => 'GAME', 'quoteId' => 'BTC' ),
            ),
            'fees' => array (
                'trading' => array (
                    'maker' => 0.3 / 100,
                    'taker' => 0.0043,
                ),
                'funding' => array (
                    'withdraw' => array (
                        'BTC' => 0.0009,
                        'LTC' => 0.005,
                        'ETH' => 0.00126,
                        'LSK' => 0.2,
                        'BCH' => 0.0006,
                        'GAME' => 0.005,
                        'DASH' => 0.001,
                        'BTG' => 0.0008,
                        'PLN' => 4,
                        'EUR' => 1.5,
                    ),
                ),
            ),
            'exceptions' => array (
                '400' => '\\ccxt\\ExchangeError', // At least one parameter wasn't set
                '401' => '\\ccxt\\InvalidOrder', // Invalid order type
                '402' => '\\ccxt\\InvalidOrder', // No orders with specified currencies
                '403' => '\\ccxt\\InvalidOrder', // Invalid payment currency name
                '404' => '\\ccxt\\InvalidOrder', // Error. Wrong transaction type
                '405' => '\\ccxt\\InvalidOrder', // Order with this id doesn't exist
                '406' => '\\ccxt\\InsufficientFunds', // No enough money or crypto
                // code 407 not specified are not specified in their docs
                '408' => '\\ccxt\\InvalidOrder', // Invalid currency name
                '501' => '\\ccxt\\AuthenticationError', // Invalid public key
                '502' => '\\ccxt\\AuthenticationError', // Invalid sign
                '503' => '\\ccxt\\InvalidNonce', // Invalid moment parameter. Request time doesn't match current server time
                '504' => '\\ccxt\\ExchangeError', // Invalid method
                '505' => '\\ccxt\\AuthenticationError', // Key has no permission for this action
                '506' => '\\ccxt\\AuthenticationError', // Account locked. Please contact with customer service
                // codes 507 and 508 are not specified in their docs
                '509' => '\\ccxt\\ExchangeError', // The BIC/SWIFT is required for this currency
                '510' => '\\ccxt\\ExchangeError', // Invalid market name
            ),
        ));
    }

    public function fetch_balance ($params = array ()) {
        $response = $this->privatePostInfo ();
        if (is_array ($response) && array_key_exists ('balances', $response)) {
            $balance = $response['balances'];
            $result = array ( 'info' => $balance );
            $codes = is_array ($this->currencies) ? array_keys ($this->currencies) : array ();
            for ($i = 0; $i < count ($codes); $i++) {
                $code = $codes[$i];
                $currency = $this->currencies[$code];
                $id = $currency['id'];
                $account = $this->account ();
                if (is_array ($balance) && array_key_exists ($id, $balance)) {
                    $account['free'] = floatval ($balance[$id]['available']);
                    $account['used'] = floatval ($balance[$id]['locked']);
                    $account['total'] = $this->sum ($account['free'], $account['used']);
                }
                $result[$code] = $account;
            }
            return $this->parse_balance($result);
        }
        throw new ExchangeError ($this->id . ' empty $balance $response ' . $this->json ($response));
    }

    public function fetch_order_book ($symbol, $limit = null, $params = array ()) {
        $orderbook = $this->publicGetIdOrderbook (array_merge (array (
            'id' => $this->market_id($symbol),
        ), $params));
        return $this->parse_order_book($orderbook);
    }

    public function fetch_ticker ($symbol, $params = array ()) {
        $ticker = $this->publicGetIdTicker (array_merge (array (
            'id' => $this->market_id($symbol),
        ), $params));
        $timestamp = $this->milliseconds ();
        $baseVolume = $this->safe_float($ticker, 'volume');
        $vwap = $this->safe_float($ticker, 'vwap');
        $quoteVolume = $baseVolume * $vwap;
        return array (
            'symbol' => $symbol,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => $this->safe_float($ticker, 'max'),
            'low' => $this->safe_float($ticker, 'min'),
            'bid' => $this->safe_float($ticker, 'bid'),
            'ask' => $this->safe_float($ticker, 'ask'),
            'vwap' => $vwap,
            'open' => null,
            'close' => null,
            'first' => null,
            'last' => $this->safe_float($ticker, 'last'),
            'change' => null,
            'percentage' => null,
            'average' => $this->safe_float($ticker, 'average'),
            'baseVolume' => $baseVolume,
            'quoteVolume' => $quoteVolume,
            'info' => $ticker,
        );
    }

    public function parse_trade ($trade, $market) {
        $timestamp = $trade['date'] * 1000;
        return array (
            'id' => $trade['tid'],
            'info' => $trade,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'symbol' => $market['symbol'],
            'type' => null,
            'side' => $trade['type'],
            'price' => $trade['price'],
            'amount' => $trade['amount'],
        );
    }

    public function fetch_trades ($symbol, $since = null, $limit = null, $params = array ()) {
        $market = $this->market ($symbol);
        $response = $this->publicGetIdTrades (array_merge (array (
            'id' => $market['id'],
        ), $params));
        return $this->parse_trades($response, $market, $since, $limit);
    }

    public function create_order ($symbol, $type, $side, $amount, $price = null, $params = array ()) {
        if ($type !== 'limit')
            throw new ExchangeError ($this->id . ' allows limit orders only');
        $market = $this->market ($symbol);
        return $this->privatePostTrade (array_merge (array (
            'type' => $side,
            'currency' => $market['baseId'],
            'amount' => $amount,
            'payment_currency' => $market['quoteId'],
            'rate' => $price,
        ), $params));
    }

    public function cancel_order ($id, $symbol = null, $params = array ()) {
        return $this->privatePostCancel (array ( 'id' => $id ));
    }

    public function is_fiat ($currency) {
        $fiatCurrencies = array (
            'USD' => true,
            'EUR' => true,
            'PLN' => true,
        );
        if (is_array ($fiatCurrencies) && array_key_exists ($currency, $fiatCurrencies))
            return true;
        return false;
    }

    public function withdraw ($code, $amount, $address, $tag = null, $params = array ()) {
        $this->check_address($address);
        $this->load_markets();
        $method = null;
        $currency = $this->currency ($code);
        $request = array (
            'currency' => $currency['id'],
            'quantity' => $amount,
        );
        if ($this->is_fiat ($code)) {
            $method = 'privatePostWithdraw';
            // $request['account'] = $params['account']; // they demand an account number
            // $request['express'] = $params['express']; // whatever it means, they don't explain
            // $request['bic'] = '';
        } else {
            $method = 'privatePostTransfer';
            $request['address'] = $address;
        }
        $response = $this->$method (array_merge ($request, $params));
        return array (
            'info' => $response,
            'id' => null,
        );
    }

    public function sign ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = $this->urls['api'][$api];
        if ($api === 'public') {
            $url .= '/' . $this->implode_params($path, $params) . '.json';
        } else {
            $this->check_required_credentials();
            $body = $this->urlencode (array_merge (array (
                'method' => $path,
                'moment' => $this->nonce (),
            ), $params));
            $headers = array (
                'Content-Type' => 'application/x-www-form-urlencoded',
                'API-Key' => $this->apiKey,
                'API-Hash' => $this->hmac ($this->encode ($body), $this->encode ($this->secret), 'sha512'),
            );
        }
        return array ( 'url' => $url, 'method' => $method, 'body' => $body, 'headers' => $headers );
    }

    public function handle_errors ($httpCode, $reason, $url, $method, $headers, $body) {
        if (gettype ($body) != 'string')
            return; // fallback to default error handler
        if (strlen ($body) < 2)
            return;
        if (($body[0] === '{') || ($body[0] === '[')) {
            $response = json_decode ($body, $as_associative_array = true);
            if (is_array ($response) && array_key_exists ('code', $response)) {
                //
                // bitbay returns the integer 'success' => 1 key from their private API
                // or an integer 'code' value from 0 to 510 and an error message
                //
                //      array ( 'success' => 1, ... )
                //      array ( 'code' => 502, 'message' => 'Invalid sign' )
                //      array ( 'code' => 0, 'message' => 'offer funds not exceeding minimums' )
                //
                //      400 At least one parameter wasn't set
                //      401 Invalid order type
                //      402 No orders with specified currencies
                //      403 Invalid payment currency name
                //      404 Error. Wrong transaction type
                //      405 Order with this id doesn't exist
                //      406 No enough money or crypto
                //      408 Invalid currency name
                //      501 Invalid public key
                //      502 Invalid sign
                //      503 Invalid moment parameter. Request time doesn't match current server time
                //      504 Invalid $method
                //      505 Key has no permission for this action
                //      506 Account locked. Please contact with customer service
                //      509 The BIC/SWIFT is required for this currency
                //      510 Invalid market name
                //
                $code = $response['code']; // always an integer
                $feedback = $this->id . ' ' . $this->json ($response);
                $exceptions = $this->exceptions;
                if (is_array ($this->exceptions) && array_key_exists ($code, $this->exceptions)) {
                    throw new $exceptions[$code] ($feedback);
                } else {
                    throw new ExchangeError ($feedback);
                }
            }
        }
    }
}
