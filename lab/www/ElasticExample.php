<?php

namespace App;

use App\ClientFactory;

class ElasticExample
{
    private $client;

    public function __construct()
    {
        $this->client = ClientFactory::make('http://localhost:9200/');
    }

    public function addProduct($id, $data)
    {
        $response = $this->client->put("products/_doc/$id", [
            'json' => $data
        ]);

        return $response->getBody()->getContents();
    }

    public function getProduct($id)
    {
        $response = $this->client->get("products/_doc/$id");

        return $response->getBody()->getContents();
    }

    public function searchProducts($query)
    {
        $response = $this->client->get("products/_search", [
            'json' => [
                'query' => [
                    'match' => $query
                ]
            ]
        ]);

        return $response->getBody()->getContents();
    }

    public function deleteProduct($id)
    {
        $response = $this->client->delete("products/_doc/$id");

        return $response->getBody()->getContents();
    }
}
