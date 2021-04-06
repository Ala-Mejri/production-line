<?php

namespace App\Interfaces;

interface MachineInterface
{
    public function hasNext(): bool;

    public function setNext(MachineInterface $machine): MachineInterface;

    public function run(string $input): string;
}
