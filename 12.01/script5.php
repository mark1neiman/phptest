<?php
require_once 'user.php';

class Comment
{
    private $author;
    private $task;
    private $text;

    public function __construct(User $author, Task $task, $text)
    {
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTask()
    {
        return $this->task;
    }

    public function getText()
    {
        return $this->text;
    }
}

class Task
{

    private $comments = array();

    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;
    }

    public function getComments()
    {
        return $this->comments;
    }
}

class TaskService
{
    public static function addComment(User $user, Task $task, $text)
    {
        $comment = new Comment($user, $task, $text);
        $task->addComment($comment);
    }
}
