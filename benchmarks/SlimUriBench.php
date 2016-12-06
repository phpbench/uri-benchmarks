<?php

namespace PhpBench\Benchmarks;

use Slim\Http\Uri;

class SlimUriBench extends AbstractBench
{
    public function benchCreateValueObject()
    {
        Uri::createFromString($this->getUrlString());
    }
}
