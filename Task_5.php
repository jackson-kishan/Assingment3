<?php 

   /* 
   * Create a PHP function called generatePassword($length) that generates
   *  a random password of the specified length. The password should include
   * lowercase, uppercase letters, numbers, and special characters(!@#$%^&*()_+).
   * Write a PHP program to generate a password with a length of 12 characters
   * using the function and print the password.
   */


   function generatePassword($length){
      $text = 'abcdefghijklmnopqrstuvwxyzABCDEFGQRSTUVWXYZ0123456789!@#$%^&*()_+';
       $randomString = substr(str_shuffle($text), 0, $length);
       return $randomString;
   }
   echo  generatePassword(12);







?>