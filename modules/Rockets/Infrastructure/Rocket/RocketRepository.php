<?php

namespace Rockets\Infrastructure\Rocket;

use GuzzleHttp\Client;
use Rockets\Domain\Payload\Payload;
use Rockets\Domain\Rocket\Rocket;
use Rockets\Domain\Rocket\RocketRepositoryInterface;

class RocketRepository implements RocketRepositoryInterface
{
    public function findRocket($name)
    {
        $apiUrl = 'https://api.spacexdata.com/v4/rockets/' . $name;
        $client = new Client();

        try {
            $response = $client->request('GET', $apiUrl, [
                'verify' => false // какая то фигня с SSL сертификатом
            ]);
            $result = json_decode($response->getBody(), true);

            $payloads = array_map(function ($payload) {
                return new Payload(
                    $payload['name'],
                    $payload['kg'],
                    $payload['id']
                );
            }, $result['payload_weights']);


            return new Rocket(
                $result['name'],
                $result['mass']['kg'],
                $payloads
            );
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            return $e->getMessage();
        }
    }
}