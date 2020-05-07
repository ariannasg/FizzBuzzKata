<?php declare(strict_types=1);

namespace FizzBuzz\Test;

use FizzBuzz\NumberPrinter;
use PHPUnit\Framework\TestCase;

class NumberPrinterTest extends TestCase
{
    public function testCanPrintNumbersFromOneToTen(): void
    {
        $result = (new NumberPrinter)->execute(1, 10);

        $expectedOneToTenOutput = <<<EOT
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
            $expectedOneToTenOutput,
            $result,
            "When printing all numbers from 1 to 10, we should get: \n{$expectedOneToTenOutput}"
        );
    }

    public function testPrintsNumbersFromOneToAHundredByDefault(): void
    {
        $result = (new NumberPrinter)->execute();

        $expectedOneToTenOutput = <<<EOT
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

        self::assertNotEquals(
            $expectedOneToTenOutput,
            $result,
            "When printing all numbers from 1 to 100 by default, we should not get: \n{$expectedOneToTenOutput}"
        );
        self::assertStringContainsString(
            '98',
            $result,
            "When printing all numbers from 1 to 100  by default, 98 should be in the return string"
        );
    }
}
