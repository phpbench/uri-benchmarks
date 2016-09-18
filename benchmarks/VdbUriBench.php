<?php

namespace PhpBench\Benchmarks;

use VDB\Uri\Uri;

class VdbUriBench extends AbstractBench
{
    public function benchCreateValueObject()
    {
        $uri = new Uri($this->getUrlString());
    }
}
