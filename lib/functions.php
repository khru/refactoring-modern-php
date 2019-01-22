<?php

define('CSV_PATH', 'data/btc.csv');
/**
 * test pre-commit.
 */
function get_price()
{
    $json = file_get_contents('https://api.coindesk.com/v1/bpi/currentprice.json');
    $data = json_decode($json);

    // Process response
    if (JSON_ERROR_NONE !== json_last_error()) {
        throw new Exception('Bad JSON');
    }

    return $data->bpi->EUR->rate_float;
}

function save_price($price)
{
    $line = date('Y-m-d H:i:s').','.$price."\n";
    appent_to_file(CSV_PATH, $line);
}

function appent_to_file($path, $content)
{
    if (!file_exists(CSV_PATH)) {
        $mode = 0;
    } else {
        $mode = FILE_APPEND;
    }
    file_put_contents($path, $content, $mode);
}
