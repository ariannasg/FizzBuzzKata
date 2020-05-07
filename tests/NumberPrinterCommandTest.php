<?php declare(strict_types=1);

namespace FizzBuzz\Test;

use FizzBuzz\NumberPrinter;
use FizzBuzz\NumberPrinterCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class NumberPrinterCommandTest extends TestCase
{
    public function testPrintsNumbersOneToAHundredByDefault(): void
    {
        $numberPrinter = $this->getMockBuilder(NumberPrinter::class)->getMock();

        $input = $this->getMockBuilder(InputInterface::class)->getMock();
        $output = $this->getMockBuilder(OutputInterface::class)->getMock();

        $numberPrinter->expects(self::once())->method('execute');

        $command = new NumberPrinterCommand();
        $command->setNumberPrinter($numberPrinter);
        $command->execute($input, $output);
    }
}
