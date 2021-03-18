<?php

namespace Dex\Skeleton\Tests;

use Dex\Skeleton\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testHello()
    {
        $example = new Example();

        $this->assertEquals('World!', $example->hello());
    }
}
