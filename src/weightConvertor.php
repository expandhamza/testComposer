<?php

namespace Expandcart\UintConversion;
class weightConvertor
{
    private $kg,
        $pound;

    public function __construct(float $kg)
    {
        $this->kg = $kg;
    }

    /*====================================================================*/
    public function toPound()
    {
        return $this->kg * 2.204623;
    }
    /*====================================================================*/
}