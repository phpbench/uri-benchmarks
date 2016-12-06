<?php

namespace PhpBench\Benchmarks;

use GuzzleHttp\Psr7\Uri;

class GuzzlePsr7UriBench extends AbstractBench
{
    public function benchCreateValueObject()
    {
        new Uri($this->getUrlString());
    }
}
