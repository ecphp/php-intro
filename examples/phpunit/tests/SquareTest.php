<?php

declare(strict_types=1);

namespace drupol\tests\shape;

use drupol\shape\Square;
use PHPUnit\Framework\TestCase;

/**
 * Class SquareTest.
 *
 * @internal
 * @coversNothing
 */
final class SquareTest extends TestCase
{
    public function testArea()
    {
        $square = new Square(2);

        self::assertEquals(4, $square->area());
    }
}
