<?php declare(strict_types=1);

namespace FizzBuzz\Test;

use FizzBuzz\NumberPrinter;
use FizzBuzz\NumberPrinterCommand;
use PHPUnit\Framework\TestCase;

class NumberPrinterCommandTest extends TestCase
{
    public function testPrintsNumbersOneToAHundredByDefault(): void
    {
        $numberPrinter = $this->getMockBuilder(NumberPrinter::class)->getMock();

        $numberPrinter->expects(self::once())->method('execute');

        $command = new NumberPrinterCommand($numberPrinter);
        $command->execute();
    }
}

// uncomment to get full output
// (new NumberPrinterCommand(new NumberPrinter()))->execute();