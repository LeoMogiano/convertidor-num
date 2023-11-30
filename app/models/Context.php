<?php

require_once('../app/models/ConversionNum.php');
require_once('../app/models/ContextInterface.php');

class Context implements ContextInterface
{
    private ConversionNum $strategy;

    public function __construct(ConversionNum $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(ConversionNum $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function conversionNumerica(int $num, string $base): void
    {
        $this->strategy->conversionNum($num);
    }
}
