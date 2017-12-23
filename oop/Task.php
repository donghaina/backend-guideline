<?php

class Task
{
    public $desc;
    public $completed = false;

    public function __construct($desc)
    {
        $this->desc = $desc;
    }

    public function complete(){
        $this->completed = true;
    }
}

$task = new Task('Learn oop');
$task->complete();

var_dump($task->desc);
echo '<br>';
var_dump($task->completed);