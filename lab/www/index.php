<?php

require 'vendor/autoload.php';

use App\ElasticExample;

$elastic = new ElasticExample();

echo "<pre>";

echo "\n\nДобавление товара\n";
echo $elastic->addProduct(1, [
    'name' => 'Cake',
    'price' => 10000000,
    'category' => 'Yummy'
]);

echo "\n\nПолучение товара\n";
echo $elastic->getProduct(1);

echo "\n\nПоиск товара\n";
echo $elastic->searchProducts([
    'name' => 'Cake'
]);

echo "\n\nУдаление товара\n";
echo $elastic->deleteProduct(1);

echo "</pre>";
