<?php

require 'vendor/autoload.php';
require 'ElasticExample.php';

$elastic = new ElasticExample();

echo "<h2>Добавление товара</h2>";

$result1 = $elastic->addProduct(1, [
    'name' => 'Ноутбук',
    'price' => 80000,
    'category' => 'electronics'
]);

echo "<pre>";
print_r($result1);
echo "</pre>";

echo "<h2>Поиск товара</h2>";

$result2 = $elastic->searchProduct([
    'name' => 'Ноутбук'
]);

echo "<pre>";
print_r($result2);
echo "</pre>";
