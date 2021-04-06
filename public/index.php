<?php

require '../vendor/autoload.php';

use App\Models\ProductionLine;

printProductionLineResult();

function printProductionLineResult(): void
{
    $productionLine = new ProductionLine();
    $output = $productionLine->execute('Teeth braces:');

    echo nl2br($output);
}
