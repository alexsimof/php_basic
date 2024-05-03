<?php

require_once __DIR__ . '/Bank.php';

$bank = new Bank('Alex', 000123, 0);

//$bank->setAccountBalance(1000);
echo $bank->getAccountBalance();



//try {
//    $bank->getCash(5000);
//} catch (Exception $error) {
//    echo $error->getMessage();
//}