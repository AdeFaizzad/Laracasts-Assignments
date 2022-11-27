<?php

    class Task {

        public $description;
        public $completed = false;

        public function __construct($description)
        {
            $this->description = $description;
        }

        public function complete(){
            $this->completed = true;
        }

        public function isComplete(){
            return $this->completed;
        }
    }

    $tasks = [
        new Task('Wash the dishes'),
        new Task('Complete my assignments'),
        new Task('Do some coding practice')
    ];

    $tasks[0]->complete();







    // $task = new Task('go to the store');
    // $task->complete();
    // dd($task->isComplete());
    // dd($task);

    require 'index.view.php';