<?php

declare(strict_types=1);

namespace Psl\Tests\PseudoRandom;

use PHPUnit\Framework\TestCase;
use Psl\PseudoRandom;

class FloatTest extends TestCase
{
    public function testFloat(): void
    {
        $random = PseudoRandom\float();

        self::assertIsFloat($random);
        self::assertGreaterThanOrEqual(0, $random);
        self::assertLessThanOrEqual(1, $random);
    }
}
