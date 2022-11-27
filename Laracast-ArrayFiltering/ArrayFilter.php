<?php

   $ages = array(13,15,17,19,21,25,27,29);

   function children($age){
        return $age < 18;
   }

   $result = array_filter($ages,"children");
   print_r($result);
?>