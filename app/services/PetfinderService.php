<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PetfinderService
{
    public function getAccessToken()
    {
        return Cache::remember('petfinder_token', 3500, function () {
            $response = Http::asForm()->withOptions(['verify' => false])->post('https://api.petfinder.com/v2/oauth2/token', [
                'grant_type' => 'client_credentials',
                'client_id' => config('services.petfinder.client_id'),
                'client_secret' => config('services.petfinder.client_secret'),

            ]);

            return $response->json()['access_token'];
        });
    }

    public function getAnimals($params = [])
    {
        $token = $this->getAccessToken();

        $response = Http::withToken($token)
            ->withOptions(['verify' => false])
            ->get('https://api.petfinder.com/v2/animals', $params);

        return $response->json();
    }

    public function getBreeds($type = 'dog')
    {
        $token = $this->getAccessToken();
        $response = Http::withToken($token)
            ->withOptions(['verify' => false])
            ->get("https://api.petfinder.com/v2/types/{$type}/breeds");
        return $response->json();
    }
}
