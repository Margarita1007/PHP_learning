<?php

namespace Rockets\Domain\Payload;

use Rockets\Domain\Rocket\Rocket;

interface PayloadRepositoryInterface
{
    public function selectPayload(Rocket $rocket, $payloadId);
}