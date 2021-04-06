<?php

namespace App\Interfaces;

interface ProductionLineInterface
{
    public function execute(string $input): ?string;
}
