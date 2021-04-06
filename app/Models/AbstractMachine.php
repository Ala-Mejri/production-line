<?php

namespace App\Models;

use App\Interfaces\MachineInterface;

abstract class AbstractMachine implements MachineInterface
{
    private MachineInterface $next;

    public function hasNext(): bool
    {
        return isset($this->next);
    }

    /**
     * This method can be used to build a chain of machine objects.
     */
    public function setNext(MachineInterface $machine): MachineInterface
    {
        $this->next = $machine;

        return $machine;
    }

    /**
     * Subclasses must override this method to handle the input.
     * A subclass can fall back to the parent implementation if it can't process the input.
     */
    public function run(string $input): string
    {
        if (!$this->hasNext()) {
            return $input;
        }

        return $this->next->run($input);
    }
}
