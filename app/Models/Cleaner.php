<?php

namespace App\Models;

class Cleaner extends AbstractMachine
{
    public function run(string $input): string
    {
        $input .= PHP_EOL . 'Cleaned';

        return parent::run($input);
    }
}
