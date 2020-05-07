<?php declare(strict_types=1);

namespace FizzBuzz\Test;

use PHPUnit\Framework\TestCase;

class NumberPrinterTest extends TestCase
{
    public function testWeCanReturnTheSameNumber(): void {
        $result = $this->printNumber(1);

        self::assertEquals(1, $result, 'When taking 1 we should return 1');
    }

    private function printNumber(int $number): int
    {
        return $number;
    }
}
