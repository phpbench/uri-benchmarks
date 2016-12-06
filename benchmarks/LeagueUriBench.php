<?php

namespace PhpBench\Benchmarks;

use League\Uri\Schemes\Http;

class LeagueUriBench extends AbstractBench
{
    public function benchCreateValueObject()
    {
        Http::createFromComponents(parse_url($this->getUrlString()));
    }
}
