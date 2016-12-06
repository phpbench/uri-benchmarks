<?php

namespace PhpBench\Benchmarks;

use Zend\Uri\Uri;

class ZendUriBench extends AbstractBench
{
    public function benchCreateValueObject()
    {
        new Uri($this->getUrlString());
    }
}
