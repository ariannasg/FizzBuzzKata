<?php declare(strict_types=1);

namespace FizzBuzz;

class NumberPrinterCommand
{
    /**
     * @var NumberPrinter
     */
    private $numberPrinter;

    public function __construct(NumberPrinter $numberPrinter)
    {
        $this->numberPrinter = $numberPrinter;
    }

    public function execute(): void
    {
        printf($this->numberPrinter->execute());
    }
}