<?php

namespace Szhorvath\Getaddress;

use GuzzleHttp\Client;

class Getaddress
{
    protected $client;

    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->client = new Client();

        $this->apiKey = $apiKey;
    }

    public function lookup($postcode, $houseNumOrName = '')
    {
        dd($this);
    }
}
