<?php

require_once __DIR__ . '/Bank.php';

$bank = new Bank('Alex', 000123, 5000);

$bank->setAccountBalance(1000);
//echo $bank->getAccountBalance();

$bank->getCash(2000);
//echo $bank->getAccountBalance();

//$bank->getCash(5000);

try {
    $bank->getCash(5000);
} catch (Exception $error) {
    echo $error->getMessage();
}