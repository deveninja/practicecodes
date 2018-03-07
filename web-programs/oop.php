<?php

class Task 

{
    public $description;
    public $TaskTitle;
    public $completed = false;

    public function __construct($TaskTitle, $description)
    {
        $this->TaskTitle = $TaskTitle;
        $this->description = $description;
    }

    public function completed() 
    {
        $this->completed = true;
    }

}

// $task = new Task('Task1', 'Nice Job!');

// $task->completed();

// var_dump($task->completed);