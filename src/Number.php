<?php declare(strict_types=1);

namespace FizzBuzz;

class Number
{
    private const FIZZ = 'Fizz';
    private const BUZZ = 'Buzz';
    private const FIZZ_BUZZ = 'FizzBuzz';

    /**
     * @var int
     */
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function convertToString(): string
    {
        if ($this->isMultipleOfBothThreeAndFive()) {
            return self::FIZZ_BUZZ;
        }

        if ($this->isMultipleOfThree() || ($this->containsThree())) {
            return self::FIZZ;
        }

        if ($this->isMultipleOfFive()) {
            return self::BUZZ;
        }

        return (string)$this->value;
    }

    /**
     * @return bool
     */
    private function isMultipleOfBothThreeAndFive(): bool
    {
        return $this->isMultipleOfThree() && $this->isMultipleOfFive();
    }

    /**
     * @return bool
     */
    private function isMultipleOfThree(): bool
    {
        return $this->value % 3 === 0;
    }

    /**
     * @return bool
     */
    private function isMultipleOfFive(): bool
    {
        return $this->value % 5 === 0;
    }

    /**
     * @return bool
     */
    private function containsThree(): bool
    {
        return strpos((string)$this->value, '3') !== false;
    }
}