<?php 

   /* 
    * Create an array called $grades with the following values: 85, 92, 78, 88, 95.
    * Write a PHP function which takes "$grades" as an argument to sort the array
    * in descending order and prints the sorted grades as array.  
   */


   $grades = array(85, 92, 78, 88, 95);

   
   function sortGrades($grades){
     rsort($grades);
       print_r($grades);
   }

   sortGrades($grades);
   



?>