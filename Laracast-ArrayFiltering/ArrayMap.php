<?php

    $someNumbers = array(36,49,64,81,100);

    function mySquare($num){
        $result = sqrt($num);
        return $result;
    }

    $newArray = array_map("mySquare",$someNumbers);
    print_r($newArray);
?>