<?php

    class Vacancy
    {
        public $department;

        public $isShortListed;

        public function __construct($department, $isShortListed)
        {
            $this -> department = $department;
            $this -> isShortListed = $isShortListed;
        }
    }

    $vacancies = [
        new Vacancy('Sales and Marketing', true),
        new Vacancy('Human Resource', false),
        new Vacancy('Manufacturing', true),
        new Vacancy('Service', false)

    ];

    //var_dump($vacancies);
    // print_r($vacancies);

    // $stillVacant = array_filter($vacancies,function($vacancy){
    //     // return $vacancy -> isShortListed === false;
    //     return ! $vacancy->isShortListed;
    // });

    // // print_r($stillVacant);
    // var_dump($stillVacant);

    // $filledVacancies = array_filter($vacancies,function($vacancy){
    //     // return $vacancy -> isShortListed === true;
    //     return  $vacancy->isShortListed;
    // });

    // // print_r($filledVacancies);
    // var_dump($filledVacancies);

    // $changedStatus = array_map(function($vacancy){
    //     $vacancy->isShortListed = true;
    //     return $vacancy;
    // }, $vacancies);

    // var_dump($changedStatus);

    $positions = array_column($vacancies, 'department');
    var_dump($positions);
?>