<?php


// Перелічення станів завдань
enum TaskStatus
{
    case COMPLETED = "виконано";
    case NOT_COMPLETED = "не виконано";
}

class TaskList
{
    private $tasks = [];
    private $file = 'tasks.txt';

    public function __construct()
    {
        $this->loadTasks();
    }

    public function addTask($taskName, $priority)
    {
        $taskId = uniqid();
        $this->tasks[$taskId] = ['name' => $taskName, 'priority' => $priority, 'status' => TaskStatus::NOT_COMPLETED];
        $this->saveTasks();
    }

    public function deleteTask($taskId)
    {
        if (isset($this->tasks[$taskId])) {
            unset($this->tasks[$taskId]);
            $this->saveTasks();
        }
    }

    public function getTasks()
    {
        $tasks = $this->tasks;
        usort($tasks, function ($a, $b) {
            return $b['priority'] - $a['priority'];
        });
        return $tasks;
    }

    public function completeTask($taskId)
    {
        if (isset($this->tasks[$taskId])) {
            $this->tasks[$taskId]['status'] = TaskStatus::COMPLETED;
            $this->saveTasks();
        }
    }

    private function loadTasks()
    {
        if (file_exists($this->file)) {
            $content = file_get_contents($this->file);
            $this->tasks = unserialize($content);
        }
    }

    private function saveTasks()
    {
        file_put_contents($this->file, serialize($this->tasks));
    }
}

// Приклад використання:
$taskList = new TaskList();

// Додати завдання
$taskList->addTask("Прибрати кімнату", 2);
$taskList->addTask("Піти в магазин", 1);
$taskList->addTask("Написати програму", 3);

// Отримати список завдань
$tasks = $taskList->getTasks();
echo "Список завдань:\n";
foreach ($tasks as $taskId => $task) {
    echo "- {$task['name']} (пріоритет {$task['priority']}, статус: {$task['status']})\n";
}

// Позначити завдання як виконані
$taskList->completeTask(array_key_first($tasks));

// Отримати оновлений список завдань
$tasks = $taskList->getTasks();
echo "Оновлений список завдань:\n";
foreach ($tasks as $taskId => $task) {
    echo "- {$task['name']} (пріоритет {$task['priority']}, статус: {$task['status']})\n";
}

