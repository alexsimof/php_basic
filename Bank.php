<?php

class Bank
{
    private string $name;
    private int $accountNumber;
    private int $accountBalance;

    public function __construct(string $name, int $accountNumber, int $accountBalance)
    {
        $this->name = $name;
        $this->accountNumber = $accountNumber;
        $this->accountBalance = max($accountBalance, 0);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    public function getAccountBalance(): int
    {
        return $this->accountBalance;
    }

    public function changeAccountNumber(int $newAccountNumber): int
    {
        if ($newAccountNumber !== 0) {
            $this->$accountNumber = $newAccountNumber;
        }
        return $this->$accountNumber;
    }

    public function setAccountBalance(int $newAccountBalance): int
    {

        if ($newAccountBalance !== 0) {
            $this->accountBalance = $this->accountBalance + $newAccountBalance;
            return $this->accountBalance;
        }
        return $this->accountBalance;
    }

    public function getCash (int $cash): int
    {
        if ($this->accountBalance !== 0 && $cash !== 0 && $cash < $this->accountBalance) {
            $this->accountBalance = $this->accountBalance - $cash;
            return $this->accountBalance;
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
