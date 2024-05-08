<?php
require_once __DIR__ . '/TaskStatus.php';
require_once __DIR__ . '/ToDoList.php';

//$toDo = new ToDoList();
//$toDo->addTask('test-1', 1);

try {
    $toDo = new ToDoList();
    $toDo->addTask('Убрать квартиру', 1);
    $toDo->addTask('Купить хлеб', 3);
    $toDo->addTask('Помыть машину', 2);
    $toDo->addTask('Покормить кота', 4);

//

    $tasks = $toDo->getTasks();

    foreach ($tasks as $task) {
        print_r($task) ;
    }

} catch (Exception $error) {

    echo $error->getMessage() . PHP_EOL;
}
