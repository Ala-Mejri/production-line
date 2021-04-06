<?php

namespace App\Models;

class Sorter extends AbstractMachine
{
    public function run(string $input): string
    {
        $input .= PHP_EOL . 'Sorted';

        return parent::run($input);
    }
}
