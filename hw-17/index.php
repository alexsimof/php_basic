<?php

$dsn = 'mysql:host=mysql;port=3306;dbname=hillel';
$database = new PDO($dsn, 'root', 'root');

$stmt = $database->query("SELECT * FROM `teachers`");

// Вопрос:
//получается, когда мы делаем запрос через query то подготавливать его не надо?
// он же подготавливает и выполняет ..

function getName($stmt): Generator
{
    while ($row = $stmt->fetch()) {
       yield $row['name'];
    }
}
foreach (getName($stmt) as $row) {
    echo '<br>';
    print_r($row);
    echo '<br>';
}

// вроде правильно все..)) с генератором

$subject = 'biology';

$sql1 = "SELECT * FROM `teachers` WHERE subject = ?";
$stmt1 = $database->prepare($sql1);
$stmt1->execute([$subject]);

$res = $stmt1->fetch();

echo "<pre>";
print_r($res);
echo "<pre>";