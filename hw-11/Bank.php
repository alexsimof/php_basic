<?php

namespace hw-11;

class Bank
{
    private string $name;
    private int $number;
    private int $balance;

    /**
     * @throws Exception
     */
    public function __construct(string $name, int $number, int $balance)
    {
        $this->setName($name);
        $this->setNumber($number);
        $this->setBalance($balance);
    }

    /**
     * @throws Exception
     */
    public function setName(string $name): void
    {
        if (strlen($name) < 2) {
            throw new Exception('enter a long name' . PHP_EOL);
        }
        $this->name = $name;
    }

    /**
     * @throws Exception
     */
    public function setNumber(int $number): int
    {
        if ($number > 0) {
            return $this->number = $number;
        }
        throw new Exception('enter another number' . PHP_EOL);
    }

    /**
     * @throws Exception
     */
    public function setBalance($balance): void
    {
        if ($balance < 0) {
            throw new Exception('enter positive balance' . PHP_EOL);
        }
        $this->balance = $balance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    /**
     * @throws Exception
     */
    public function changeNumber(int $newNumber): int
    {
        if ($newNumber > 0) {
            $this->number = $newNumber;
        }
        throw new Exception('enter positive number' . PHP_EOL);
    }

    /**
     * @throws Exception
     */
    public function addBalance(int $newBalance): int
    {

        if ($newBalance > 0) {
            $this->balance = $this->balance + $newBalance;
            return $this->balance;
        }
        throw new Exception('enter positive balance' . PHP_EOL);
    }

    /**
     * @throws Exception
     */
    public function getCash(int $cash): int
    {
        if ($this->balance !== 0 && $cash !== 0 && $cash < $this->balance) {
            $this->balance = $this->balance - $cash;
            return $this->balance;
        }
        throw new Exception('not enough money in the account' . PHP_EOL);
    }

    private array $data = [];

    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    public function __get(string $name)
    {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        }
        return null;
    }

}
