<?php

namespace Rockets\Domain\Rocket;

interface RocketRepositoryInterface {
    public function findRocket($name);
}
