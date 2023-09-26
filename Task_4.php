<?php

   /* 
    * Create a multi-dimensional array called $studentGrades to store the grades
    * of the three students. Each student has grades for three subjects: 
    * Math,English and Science. Write a PHP function which takes "$studentGrades" as
    * an argument to calculate the grades an print the average grade for each student.       
   */

   $studentGrades = array(
      "Student 1" => array(
         "Math" => 78,
         "English" => 90,
         "Science" => 87
      ),

      "Student 2" =>  array(
         "Math" => 60,
         "English" => 40,
         "Science" => 55
      ),

      "Student 3" =>  array(
         "Math" => 30,
         "English" => 25,
         "Science" => 20
      ) 
   );


   //print_r($studentGrades);

   function printAverageStudentGrades($grades){

       foreach($grades as $students => $grade){
          
           $result = array_sum($grade) / count($grade);
          

            if($result <= 100 && $result >= 80) {
               echo "$students Get Grade: A+" . PHP_EOL; 
            } elseif($result < 80  && $result >= 70){
               echo "$students Get Grade: A" . PHP_EOL; 
            } elseif($result < 70 && $result >= 60) {
               echo "$students Get Grade: A-" . PHP_EOL; 
            } elseif($result < 60 && $result >= 50) {
               echo "$students Get Grade: B" . PHP_EOL; 
            } elseif($result < 50 && $result >= 40) {
               echo "$students Get Grade: C" . PHP_EOL; 
            } elseif($result < 40 && $result >= 33) {
               echo "$students Get Grade: D" . PHP_EOL;
            } elseif($result < 33 && $result >= 0){
               echo "$students Get Grade: F" . PHP_EOL;
            }
         
       }

   }

   printAverageStudentGrades($studentGrades);


?>