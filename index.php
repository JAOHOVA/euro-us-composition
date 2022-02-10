<?php

require_once 'PriceFormatter.php';
require_once 'Product.php';

$hardDrive = new Product('Disque dur', 140.00, new EUFormatter());
$UShardDrive = new Product('Hard Drive', 140.00, new USFormatter());

echo $hardDrive->formatPrice();
echo '<br>';
echo $UShardDrive->formatPrice();