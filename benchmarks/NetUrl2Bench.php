<?php

namespace PhpBench\Benchmarks;

use Net_URL2;

class NetUrl2Bench extends AbstractBench
{
    public function benchCreateValueObject()
    {
        new Net_URL2($this->getUrlString());
    }
}
