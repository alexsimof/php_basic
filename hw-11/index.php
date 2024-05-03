<?php

require_once __DIR__ . '/Bank.php';



try {
    $bank = new Bank('Alex', 12345, 1);
    $bank->addBalance(1000);
} catch (Exception $error) {
    echo $error->getMessage() . PHP_EOL;
} finally {
    echo $bank->getBalance() . PHP_EOL;
}
