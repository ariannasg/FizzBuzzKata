<?php declare(strict_types=1);

namespace FizzBuzz;

class NumberPrinter
{
    public static function execute(): string
    {
        $result = '';

        for ($numberValue = 1; $numberValue <= 10; $numberValue++) {
            $number = new Number($numberValue);
            $result.= $number->convertNumber();

            if ($numberValue <= 9) {
                $result.= "\n";
            }
        }
        return $result;
    }
}