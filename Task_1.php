<?php 

   /* 
    * Create a string variable called $text with the value "The quick brown fox jumped over the lazy dog".
    * Write a PHP function which takes "$text" as an argument to:
    *
    *Convert the string to all lowercase.
    *
    * Replace "brown" with "red" in the string.
    *
    *Print the modified text.
   */

   $text = "The quick brown fox jumps over the lazy dog.";
   
   // Convert the string to all lowercase.
     function convertToLowercase($text){
        echo strtolower($text);
     }
    convertToLowercase($text);
    echo PHP_EOL;


    //Replace "brown" with "red" in the string.
    function stringReplace($text){
        echo str_replace("brown", "red", $text);
    }
    stringReplace($text);

?>