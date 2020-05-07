<?php declare(strict_types=1);

namespace FizzBuzz;

class NumberPrinter
{
    private const MULTIPLE_OF_THREE_AND_FIVE = 'FizzBuzz';
    private const MULTIPLE_OF_THREE = 'Fizz';
    private const MULTIPLE_OF_FIVE = 'Buzz';

    public static function execute(): string
    {
        $result = '';

        for ($number = 1; $number <= 10; $number++) {
            $result.= self::convertNumber($number);

            if ($number <= 9) {
                $result.= "\n";
            }
        }
        return $result;
    }

    public static function convertNumber(int $number): string
    {
        if (self::isMultipleOfBothThreeAndFive($number)) {
            return self::MULTIPLE_OF_THREE_AND_FIVE;
        }

        if (self::isMultipleOfThree($number)) {
            return self::MULTIPLE_OF_THREE;
        }

        if (self::isMultipleOfFive($number)) {
            return self::MULTIPLE_OF_FIVE;
        }

        return (string)$number;
    }

    /**
     * @param int $number
     * @return bool
     */
    private static function isMultipleOfBothThreeAndFive(int $number): bool
    {
        return self::isMultipleOfThree($number) && self::isMultipleOfFive($number);
    }

    /**
     * @param int $number
     * @return bool
     */
    private static function isMultipleOfThree(int $number): bool
    {
        return $number % 3 === 0;
    }

    /**
     * @param int $number
     * @return bool
     */
    private static function isMultipleOfFive(int $number): bool
    {
        return $number % 5 === 0;
    }
}