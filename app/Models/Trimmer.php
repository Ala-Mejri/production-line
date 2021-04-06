<?php

namespace App\Models;

class Trimmer extends AbstractMachine
{
    public function run(string $input): string
    {
        $input .= PHP_EOL . 'Trimmed';

        return parent::run($input);
    }
}

