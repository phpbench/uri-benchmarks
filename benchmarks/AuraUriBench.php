<?php

namespace PhpBench\Benchmarks;

use Aura\Uri\Url\Factory;
use Aura\Uri\PublicSuffixList;

class AuraUriBench extends AbstractBench
{
    private $factory;

    public function setUp()
    {
        $psl = new PublicSuffixList(require __DIR__ . '/../vendor/aura/uri/data/public-suffix-list.php');
        $this->factory = new Factory($_SERVER, $psl);
    }

    public function benchCreateValueObject()
    {
        $url = $this->factory->newInstance($this->getUrlString());
    }
}
