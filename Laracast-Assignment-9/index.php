<?php
    
   // There was no Assignment 8
   // We will proceed with Assignment 9
   // Continue tinkering with conditionals. Add a new boolean to your task array, 
   // and use its value to branch 
   // into two different paths within your HTML

    $ProjectTask = [
        'Title' => 'E-Commerce Website',
        'DueDate' => '20/12/2022',
        'ProjectManager' => 'Adeena',
        'IsCompleted' => true,
        'IsSumitted' => true
    ];

    // die(var_dump($ProjectTask));

    require 'index.template.php';
?>