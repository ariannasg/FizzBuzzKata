<?php declare(strict_types=1);

namespace FizzBuzz\Test;

use FizzBuzz\NumberPrinter;
use PHPUnit\Framework\TestCase;

class NumberPrinterTest extends TestCase
{
    public function provideOnlyMultiplesOfThree(): array
    {
        return [
            [3, "Fizz"],
            [6, "Fizz"],
            [9, "Fizz"],
        ];
    }

    public function provideOnlyMultiplesOfFive(): array
    {
        return [
            [5, "Buzz"],
            [10, "Buzz"],
            [25, "Buzz"],
        ];
    }

    public function provideMultiplesOfBothThreeAndFive(): array
    {
        return [
            [15, "FizzBuzz"],
            [30, "FizzBuzz"],
            [45, "FizzBuzz"],
        ];
    }

    public function testWeReturnTheSameNumberWhenTheNumberIsNotAMultipleOfThreeOrFive(): void
    {
        $result = NumberPrinter::execute(1);

        self::assertEquals(1, $result, 'When taking 1 we should return 1');
    }

    /**
     * @dataProvider provideOnlyMultiplesOfThree
     * @param int $number
     * @param string $expected
     */
    public function testWeReturnFizzWhenNumberIsOnlyMultipleOfThree(int $number, string $expected): void
    {
        $result = NumberPrinter::execute($number);

        self::assertEquals(
            $expected,
            $result,
            "When taking multiples of 3 (that are not multiples of 5) we should return 'Fizz'"
        );
    }

    /**
     * @dataProvider provideOnlyMultiplesOfFive
     * @param int $number
     * @param string $expected
     */
    public function testWeReturnBuzzWhenNumberIsOnlyMultipleOfFive(int $number, string $expected): void
    {
        $result = NumberPrinter::execute($number);

        self::assertEquals(
            $expected,
            $result,
            "When taking multiples of 5 (that are not multiples of 3) we should return 'Buzz'"
        );
    }

    /**
     * @dataProvider provideMultiplesOfBothThreeAndFive
     * @param int $number
     * @param string $expected
     */
    public function testWeReturnFizzBuzzWhenNumberIsMultipleOfBothThreeAndFive(int $number, string $expected): void
    {
        $result = NumberPrinter::execute(15);

        self::assertEquals("FizzBuzz", $result, "When taking 15 we should return 'FizzBuzz'");
    }
}
