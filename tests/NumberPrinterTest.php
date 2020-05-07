<?php declare(strict_types=1);

namespace FizzBuzz\Test;

use FizzBuzz\NumberPrinter;
use PHPUnit\Framework\TestCase;

class NumberPrinterTest extends TestCase
{
    public function provideMultiplesOfThree(): array
    {
        return [
            [3, "Fizz", "When taking 3 we should return 'Fizz"],
            [6, "Fizz", "When taking 6 we should return 'Fizz"],
            [9, "Fizz", "When taking 9 we should return 'Fizz"],
        ];
    }

    public function testWeCanReturnTheSameNumber(): void
    {
        $result = NumberPrinter::execute(1);

        self::assertEquals(1, $result, 'When taking 1 we should return 1');
    }

    /**
     * @dataProvider provideMultiplesOfThree
     * @param int $number
     * @param string $expected
     * @param string $msg
     */
    public function testWeReturnFizzWhenNumberIsMultipleOfThree(int $number, string $expected, string $msg): void
    {
        $result = NumberPrinter::execute($number);

        self::assertEquals($expected, $result, $msg);
    }

    public function testWeReturnFizzWhenNumberIsMultipleOfFive(): void
    {
        $result = NumberPrinter::execute(5);

        self::assertEquals("Buzz", $result, "When taking 5 we should return 'Buzz");
    }
}
