<?php declare(strict_types=1);

namespace FizzBuzz\Test;

use FizzBuzz\NumberPrinter;
use PHPUnit\Framework\TestCase;

class NumberPrinterTest extends TestCase
{
    public function testPrintNumbersOneToTen(): void
    {
        $result = NumberPrinter::execute();

        $expected = <<<EOT
        1
        2
        Fizz
        4
        Buzz
        Fizz
        7
        8
        Fizz
        Buzz
        EOT;

        self::assertEquals(
            $expected,
            $result,
            "When printing all numbers from 1 to 10, we should get: \n{$expected}"
        );
    }

}
