<?php declare(strict_types=1);

namespace FizzBuzz;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class NumberPrinterCommand extends Command
{
    /**
     * @var NumberPrinter
     */
    private $numberPrinter;

    public function setNumberPrinter(NumberPrinter $numberPrinter): void
    {
        $this->numberPrinter = $numberPrinter;
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->numberPrinter->execute();

        return 0;
    }
}