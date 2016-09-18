<?php

namespace PhpBench\Benchmarks;

use Zend\Uri\Uri;

class ZendUriBench extends AbstractBench
{
    public function benchCreateValueObject()
    {
        $uri = new Uri($this->getUrlString());
    }
}
