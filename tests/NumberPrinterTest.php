<?php declare(strict_types=1);

namespace FizzBuzz\Test;

use FizzBuzz\NumberPrinter;
use PHPUnit\Framework\TestCase;

class NumberPrinterTest extends TestCase
{
    public function provideMultiplesOfThree(): array
    {
        return [
            [3, "Fizz"],
            [6, "Fizz"],
            [9, "Fizz"],
        ];
    }

    public function provideMultiplesOfFive(): array
    {
        return [
            [5, "Buzz"],
            [10, "Buzz"],
            [25, "Buzz"],
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
     */
    public function testWeReturnFizzWhenNumberIsMultipleOfThree(int $number, string $expected): void
    {
        $result = NumberPrinter::execute($number);

        self::assertEquals(
            $expected,
            $result,
            "When taking multiples of 3 (that are not multiples of 5) we should return 'Fizz'"
        );
    }

    /**
     * @dataProvider provideMultiplesOfFive
     * @param int $number
     * @param string $expected
     */
    public function testWeReturnBuzzWhenNumberIsMultipleOfFive(int $number, string $expected): void
    {
        $result = NumberPrinter::execute($number);

        self::assertEquals(
            $expected,
            $result,
            "When taking multiples of 5 (that are not multiples of 3) we should return 'Buzz'"
        );
    }
}
