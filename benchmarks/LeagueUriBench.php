<?php

namespace PhpBench\Benchmarks;

use League\Uri\Schemes\Http;

class LeagueUriBench extends AbstractBench
{
    public function benchCreateValueObject()
    {
        $uri = Http::createFromString($this->getUrlString());
        $uri->getScheme();
        $uri->getAuthority();
    }
}
