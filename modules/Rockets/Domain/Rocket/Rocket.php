<?php

namespace Rockets\Domain\Rocket;
use Rockets\Domain\Payload\Payload;

class Rocket
{
    private $name;
    private $mass;

    /** @var Payload[] */
    private $payloads;

    public function __construct($name, $mass, $payloads) {
        $this->name = $name;
        $this->mass = $mass;
        $this->payloads = $payloads;
    }

    public function getName() {
        return $this->name;
    }

    public function getRocketMass() {
        return $this->mass;
    }

    public function getPayloads(): array
    {
        return $this->payloads;
    }

    public function getPayloadById(string $payloadId): ?Payload
    {
        foreach ($this->payloads as $payload) {
            if ($payload->getId() === $payloadId) {
                return $payload;
            }
        }
        return null;
    }

    public function getPayloadNameById($payloadId): string
    {
        $payload = $this->getPayloadById($payloadId);
        return $payload->getPayloadName();
    }

    public function getRelativeMass($payloadId) {
        $payload = $this->getPayloadById($payloadId);
        $payloadMass = $payload->getPayloadMass();
        return $payloadMass / $this->mass * 100;
    }
}