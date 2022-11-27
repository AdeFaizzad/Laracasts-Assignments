<?php
    // Assignment 7
   // Create an associative array for a task. 
   // This array should include such details as the title of the task, 
   // its due date, who it's assigned to, 
   // and whether it has been completed.

   // There is no Assignment 8
   // We will proceed with Assignment 9

    $ProjectTask = [
        'Title' => 'E-Commerce Website',
        'DueDate' => '20/12/2022',
        'ProjectManager' => 'Adeena',
        'IsCompleted' => true
    ];

    // die(var_dump($ProjectTask));

    require 'index.template.php';
?>