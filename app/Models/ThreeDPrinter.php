<?php

namespace App\Models;

class ThreeDPrinter extends AbstractMachine
{
    public function run(string $input): string
    {
        $input .= PHP_EOL . 'Printed';

        return parent::run($input);
    }
}
