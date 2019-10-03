<?php

namespace Pjmil;

use GuzzleHttp\Client;

class Pixabay 
{
    public static function get($options = [])
    { 
        $endpoint = 'https://pixabay.com/api/';
        $apiKey = env('PIXABAY_API_KEY');
        $options = array_merge($options, ['key' => $apiKey]);

        $client = new Client;
        $response = $client->get("$endpoint?" . http_build_query($options));

        return json_decode($response->getBody());
    }
}