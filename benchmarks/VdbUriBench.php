<?php

namespace PhpBench\Benchmarks;

use VDB\Uri\Uri;

class VdbUriBench extends AbstractBench
{
    public function benchCreateValueObject()
    {
        new Uri($this->getUrlString());
    }
}
