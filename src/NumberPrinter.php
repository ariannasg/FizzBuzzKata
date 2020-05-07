<?php declare(strict_types=1);

namespace FizzBuzz;

class NumberPrinter
{
    private const DEFAULT_START_NUMBER = 1;
    private const DEFAULT_END_NUMBER = 100;

    public static function execute(
        int $startNumber = self::DEFAULT_START_NUMBER,
        int $endNumber = self::DEFAULT_END_NUMBER
    ): string
    {
        $result = '';

        for ($value = $startNumber; $value <= $endNumber; $value++) {
            $result .= (new Number($value))->convertToString();

            if ($value <= $endNumber - 1) {
                $result .= "\n";
            }
        }

        printf($result);

        return $result;
    }
}