<?php

namespace App\Models;

use App\Interfaces\ProductionLineInterface;

class ProductionLine implements ProductionLineInterface
{
    public function execute(string $input): ?string
    {
        $machine = new Cleaner();
        $machine->setNext(new Packer())
            ->setNext(new Sorter())
            ->setNext(new Thermoformer())
            ->setNext(new ThreeDPrinter())
            ->setNext(new Trimmer());

        return $machine->run($input);
    }
}
