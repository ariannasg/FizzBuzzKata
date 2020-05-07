<?php declare(strict_types=1);

namespace FizzBuzz;

class NumberPrinter
{
    private const MULTIPLE_OF_THREE_AND_FIVE = 'FizzBuzz';
    private const MULTIPLE_OF_THREE = 'Fizz';
    private const MULTIPLE_OF_FIVE = 'Buzz';

    public static function execute(int $number): string
    {
        if (($number % 3 === 0) && ($number % 5 === 0)) {
            return self::MULTIPLE_OF_THREE_AND_FIVE;
        }

        if ($number % 3 === 0) {
            return self::MULTIPLE_OF_THREE;
        }

        if ($number % 5 === 0) {
            return self::MULTIPLE_OF_FIVE;
        }

        return (string)$number;
    }
}