<?php declare(strict_types=1);

namespace FizzBuzz\Test;

use FizzBuzz\Number;
use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{
    public function provideNonMultiplesOfThreeOrFive(): array
    {
        return [
            [1, "1"],
            [2, "2"],
            [4, "4"],
        ];
    }

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

    /**
     * @param int $number
     * @return string
     */
    private function convertNumber(int $number): string
    {
        return (new Number($number))->convertToString();
    }

    /**
     * @dataProvider provideNonMultiplesOfThreeOrFive
     * @param int $number
     * @param string $expected
     */
    public function testWeReturnTheSameNumberWhenIsNotAMultipleOfThreeOrFive(int $number, string $expected): void
    {
        $result = $this->convertNumber($number);

        self::assertEquals(
            $expected,
            $result,
            'When taking a number that is not multiple of 3 or 5 we should return the same number'
        );
    }

    /**
     * @dataProvider provideOnlyMultiplesOfThree
     * @param int $number
     * @param string $expected
     */
    public function testWeReturnFizzWhenNumberIsOnlyMultipleOfThree(int $number, string $expected): void
    {
        $result = $this->convertNumber($number);

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
        $result = $this->convertNumber($number);

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
        $result = $this->convertNumber($number);

        self::assertEquals($expected, $result, "When taking 15 we should return 'FizzBuzz'");
    }
}
