<?php


require 'functions.php';

class Task
{
    public $completed = false;
    protected $taskTitle;
    protected $taskDesc;
    protected $taskDue;

    public function __construct($taskTitle, $taskDesc, $taskDue)

    {
        $this->title = $taskTitle;
        $this->desc = $taskDesc;
        $this->duedate = $taskDue;
        $this->completed = false;
        
    }

    public function complete()

    {
      
     $this->completed = true;
    }

    public function completed() 

    {
      return $this->completed;
    }

    



}   

$tasks = [
    new Task('Title1', 'Description asdagfasdasda', 'Tuesday'),
    new Task('Title 2', 'ajfsiufnskvjhsiodnasodjasdasd ', 'Wednesday'),
    new Task('Title 3', 'kjvm io oiasd aidj [ sadjh ', 'Friday')

];



$tasks[0]->complete();
$tasks[1]->complete();
$tasks[2]->complete();



require 'program.view.php';