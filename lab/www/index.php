<?php

require 'vendor/autoload.php';

use App\ElasticExample;

$elastic = new ElasticExample();

echo "<h2>Добавление товара</h2>";
echo "<pre>";
echo $elastic->addProduct(1, [
    'name' => 'Cake',
    'price' => 10000000,
    'category' => 'Yummy'
]);
echo "</pre>";

echo "<h2>Получение товара</h2>";
echo "<pre>";
echo $elastic->getProduct(1);
echo "</pre>";

echo "<h2>Поиск товара</h2>";
echo "<pre>";
echo $elastic->searchProducts([
    'name' => 'Cake'
]);
echo "</pre>";

echo "<h2>Удаление товара</h2>";
echo "<pre>";
echo $elastic->deleteProduct(1);
echo "</pre>";
