<?php declare(strict_types=1);

namespace FizzBuzz;

class NumberPrinter
{
    public static function execute(int $number): string
    {
        if ($number % 3 === 0) {
            return "Fizz";
        }

        return (string)$number;
    }
}