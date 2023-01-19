<?php

class TaskProvider
{
    private array $tasks;

    public function __construct()
    {
        $this->tasks = $_SESSION['tasks'] ?? [];
    }


    /**
     * 
     * @return array
     */
    public function getUndoneList(): array
    {
        try {
            $pdo = new PDO('sqlite:database.db', null, null,);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare("SELECT * FROM tasks WHERE isDone = 0");
            $stmt->execute();

            $tasks = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $task = new Task();
                $task->setDescription($row['description']);
                $task->setIsDone($row['isDone']);
                $tasks[] = $task;
            }

            return $tasks;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function addTask(Task $task): void
    {
        try {
            $pdo = new PDO('sqlite:database.db', null, null,);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare("INSERT INTO tasks (description, isDone) VALUES (:description, :isDone)");
            $stmt->bindValue(':description', $task->getDescription());
            $stmt->bindValue(':isDone', $task->isDone());
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }



    public function deleteTask(int $key): void
    {
        unset($_SESSION['tasks'][$key]);
        unset($this->tasks[$key]);
    }
}
