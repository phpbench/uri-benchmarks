<?php

namespace PhpBench\Benchmarks;

/**
 * @Revs(1000)
 * @BeforeMethods({"setUp"})
 */
abstract class AbstractBench
{
    protected function getUrlString()
    {
        return 'https://user:password@www.host.com:2020/foobar?bar=foo&bar=zar#foobar';
    }

    public function setUp()
    {
    }

    abstract public function benchCreateValueObject();
}
