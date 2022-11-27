<?php

$empDetails = array(
    array(
        'Name' => 'Sarah',
        'Position' => 'Assistant',
        'Age' => 25,
        'City' => 'Kabul',
    ),
    array(
        'Name' => 'Rayhan',
        'Position' => 'Sales Manager',
        'Age' => 26,
        'City' => 'Kabul',
    ),
    array(
        'Name' => 'Sabrina',
        'Position' => 'Director',
        'Age' => 28,
        'City' => 'Kabul',
    ),
    array(
        'Name' => 'Rohina',
        'Position' => 'Marketer',
        'Age' => 26,
        'City' => 'Herat',
    )
        
    
    );

    $specCol = array_column($empDetails, 'Name', 'Position');
    print_r($specCol);

?>