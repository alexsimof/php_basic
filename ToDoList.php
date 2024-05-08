<?php

class ToDoList
{
    private array $taskList = [];
    private string $file = 'tasks.txt';

    public function addTask(string $taskName, int $priority): void
    {
        $taskId = rand(10, 100);

        $this->taskList[$taskId] = [
            'id' => $taskId,
            'name' => $taskName,
            'priority' => $priority,
            'status' => TaskStatus::NOT_COMPLETED
        ];

    }

    public function getTasks(): array
    {
        sort($this->taskList);
        return $this->taskList;
    }

    public function completeTask($taskId): void
    {
        foreach ($this->taskList as $taskId => $task) {
            if ($task['id'] === $taskId) {
                $this->taskList[$taskId]['status'] = TaskStatus::COMPLETED;
            }
        }
        throw new Exception('invalid id');
    }

    public function deleteTask(int $taskId): void
    {
        foreach ($this->taskList as $taskId => $task) {
            if ($task['id'] === $taskId) {
                unset($this->taskList[$taskId]);
            }
            throw new Exception('id not found');
        }
    }

    private function saveTasks(): void
    {
        $fileStroke = serialize($this->taskList);
        file_put_contents($this->file, $fileStroke, FILE_APPEND);
    }
    private function loadTasks(): void
    {
        if (file_exists($this->file)) {
            $content = file_get_contents($this->file);
            $this->taskList = unserialize($content);
        }
        throw new Exception('invalid file');
    }

}