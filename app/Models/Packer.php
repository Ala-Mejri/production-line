<?php

namespace App\Models;

class Packer extends AbstractMachine
{
    public function run(string $input): string
    {
        $input .= PHP_EOL . 'Packed';

        return parent::run($input);
    }
}
