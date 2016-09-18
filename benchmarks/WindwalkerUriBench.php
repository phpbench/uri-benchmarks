<?php

namespace PhpBench\Benchmarks;

use Windwalker\Uri\Uri;


class WindwalkerUriBench extends AbstractBench
{
    public function benchCreateValueObject()
    {
        $uri = new Uri($this->getUrlString());
    }
}

