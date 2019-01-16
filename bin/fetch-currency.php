<?php

define('CSV_PATH', 'data/btc.csv');

// load current price from API
$json = file_get_contents('https://api.coindesk.com/v1/bpi/currentprice.json');
$data = json_decode($json);

// Process response
if (JSON_ERROR_NONE !== json_last_error()) {
  throw new Exception('Bad JSON');
}

$current_price = $data->bpi->EUR->rate_float;

// create CSV line to append to the file
$line = date ('Y-m-d H:i:s') . ',' . $current_price . "\n";

// Write or append to CSV
if (!file_exists(CSV_PATH)) {
  $mode = 0;
} else {
  $mode = FILE_APPEND;
}

file_put_contents(CSV_PATH, $line, $mode);

echo "Current Bitconin price is: {$current_price}\n";
