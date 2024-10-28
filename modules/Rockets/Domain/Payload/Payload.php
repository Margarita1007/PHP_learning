<?php

namespace Rockets\Domain\Payload;

class Payload
{
    private $name;
    private $id;
    private $mass;

    public function __construct($name, $mass, $id) {
        $this->id = $id;
        $this->name = $name;
        $this->mass = $mass;
    }
    public function getPayloadName(): string
    {
        return $this->id . ', ' . $this->name;
    }

    public function getPayloadMass() {
        return $this->mass;
    }

    public function getId() {
        return $this->id;
    }
}