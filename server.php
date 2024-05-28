<?php

//
//$methods = ['POST', 'GET'];
//
//$currentMethod = strtoupper($_SERVER['REQUEST_METHOD']);
//
//if (!in_array($currentMethod, $methods)) {
//    header('Location:http://localhost:8080/index.php', true, 302);
//    exit;
//}
//
//if ($currentMethod === 'GET' || !empty($name) || !empty($email)) {
//    $name = $_GET['name'];
//    $email = $_GET['email'];
//    echo 'Hello! This is are ' . $currentMethod . ' request method';
//    echo '<br>';
//    echo 'My name is ' . $name;
//    echo '<br>';
//    echo 'My email is ' . $email;
//
//} elseif ($currentMethod === 'POST' && isset($numberOne) && isset($numberTwo)) {
//    $numberOne = $_POST['number-one'];
//    $numberTwo = $_POST['number-two'];
//    $summa = $numberOne + $numberTwo;
//    echo $numberOne . '+' . $numberTwo . ' = ' . $summa;
//}
//echo 'Enter are number';
