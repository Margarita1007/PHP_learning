<?php

namespace Rockets\Infrastructure\Payload;

use Rockets\Domain\Payload\PayloadRepositoryInterface;
use Rockets\Domain\Rocket\Rocket;

class PayloadRepository implements PayloadRepositoryInterface
{
    public function selectPayload(Rocket $rocket, $payloadId) {
//        $payload = null;
//
//        // че то как то неоптимально
//        foreach ($rocket['payloads'] as $element) {
//            if ($element["id"] === $payloadId) {
//                $payload = $element;
//                break;
//            }
//        }
//
//        if ($payload !== null) {
//            return $payload;
//        } else {
//            return "Element with id '$payloadId' not found.";
//        }
    }
}