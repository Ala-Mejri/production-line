<?php

namespace App\Models;

class Thermoformer extends AbstractMachine
{
    public function run(string $input): string
    {
        $input .= PHP_EOL . 'Thermoformed';

        return parent::run($input);
    }
}
