<?php

require_once '../lib/funtions.php';

$current_price = get_price();
save_price($current_price);

echo "Current Bitconin price is: {$current_price}\n";

echo 'pre-commit test';
