<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class AmadeusService
{
    protected $client;
    protected $apiKey;
    protected $apiSecret;
    protected $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('AMADEUS_API_KEY');
        $this->apiSecret = env('AMADEUS_API_SECRET');
        $this->baseUrl = 'https://test.api.amadeus.com';
    }

    // Method to get the access token (cached)
    public function authenticate()
    {
        if (Cache::has('amadeus_access_token')) {
            return Cache::get('amadeus_access_token');
        }

        $response = $this->client->post($this->baseUrl . '/v1/security/oauth2/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => $this->apiKey,
                'client_secret' => $this->apiSecret,
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        Cache::put('amadeus_access_token', $data['access_token'], $data['expires_in']);

        return $data['access_token'];
    }

    // Method to search for airports by keyword
    public function searchAirports($keyword)
    {
        $accessToken = $this->authenticate();

        $response = $this->client->get($this->baseUrl . '/v1/reference-data/locations', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
            'query' => [
                'keyword' => $keyword,
                'subType' => 'AIRPORT,CITY',
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
