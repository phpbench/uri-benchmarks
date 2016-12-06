<?php

namespace PhpBench\Benchmarks;

use Zend\Diactoros\Uri;

class DiactorosUriBench extends AbstractBench
{
    public function benchCreateValueObject()
    {
        new Uri($this->getUrlString());
    }
}
