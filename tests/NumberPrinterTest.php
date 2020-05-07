<?php declare(strict_types=1);

namespace FizzBuzz\Test;

use FizzBuzz\NumberPrinter;
use PHPUnit\Framework\TestCase;

class NumberPrinterTest extends TestCase
{
    public function testWeCanReturnTheSameNumber(): void
    {
        $result = NumberPrinter::execute(1);

        self::assertEquals(1, $result, 'When taking 1 we should return 1');
    }

    public function testWeReturnFizzWhenNumberIsMultipleOfThree(): void
    {
        $result = NumberPrinter::execute(3);

        self::assertEquals("Fizz", $result, "When taking 3 we should return 'Fizz");
    }
}
