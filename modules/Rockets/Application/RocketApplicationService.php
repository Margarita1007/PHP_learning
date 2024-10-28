<?php

namespace Rockets\Application;

use Rockets\Domain\Rocket\RocketRepositoryInterface;

class RocketApplicationService
{
    /** @var RocketRepositoryInterface */
    private RocketRepositoryInterface $rockets;

    /**
     * @param RocketRepositoryInterface $rockets
     */
    public function __construct(RocketRepositoryInterface $rockets) {
        $this->rockets = $rockets;
    }

    public function getRocketPayloads($rocketName) {
        $rocket = $this->rockets->findRocket($rocketName);
        $payloads = $rocket->getPayloads();
        var_dump($payloads);
        return $payloads;
    }

    public function getRocketRelativeMass($rocketName, $payloadId): string
    {
        $rocket = $this->rockets->findRocket($rocketName);
        $rocket_Name = $rocket->getName();
        $payloadName = $rocket->getPayloadNameById($payloadId);
        return 'Относительная масса ракеты ' . $rocket_Name . ' c полезной нагрузкой ' . $payloadName . ': '  . $rocket->getRelativeMass($payloadId);
    }
}