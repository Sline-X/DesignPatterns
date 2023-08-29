<?php

namespace Structural\Composite;

use Unit;

class Army
{
    private array $units = [];
    
    public function addUnit(Unit $unit): void
    {
        array_push($this->units, $unit);
    }
    
    public function bombardStrength(): int
    {
        $ret = 0;
        foreach ($this->units as $unit) {
            $ret += $unit->bombradStrength();
        }
        return $ret;
    }
}
