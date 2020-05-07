<?php declare(strict_types=1);

namespace FizzBuzz;

class Number
{
    public const MULTIPLE_OF_THREE = 'Fizz';
    public const MULTIPLE_OF_FIVE = 'Buzz';
    public const MULTIPLE_OF_THREE_AND_FIVE = 'FizzBuzz';

    /**
     * @var int
     */
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function convertNumber(): string
    {
        if ($this->isMultipleOfBothThreeAndFive()) {
            return self::MULTIPLE_OF_THREE_AND_FIVE;
        }

        if ($this->isMultipleOfThree()) {
            return self::MULTIPLE_OF_THREE;
        }

        if ($this->isMultipleOfFive()) {
            return self::MULTIPLE_OF_FIVE;
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
}