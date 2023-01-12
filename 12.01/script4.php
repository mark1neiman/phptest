<?php
require_once 'user.php';

class Task
{
    private $description;
    private $dateCreated;
    private $dateUpdated;
    private $dateDone;
    private $priority;
    private $isDone;
    private $user;

    public function __construct($description, User $user)
    {
        $this->description = $description;
        $this->user = $user;
        $this->dateCreated = date("Y-m-d");
        $this->priority = 1;
        $this->isDone = false;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        $this->dateUpdated = date("Y-m-d");
    }

    public function markAsDone()
    {
        $this->isDone = true;
        $this->dateUpdated = date("Y-m-d");
        $this->dateDone = date("Y-m-d");
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    public function getDateDone()
    {
        return $this->dateDone;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function isDone()
    {
        return $this->isDone;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setPriority($priority)
    {
        $this->priority = $priority;
    }
}
