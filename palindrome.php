<?php

/*
* Program to check if the given string is palindrome
*/

$given_string = "";
$rev_string = strtolower(strrev($given_string));

if(strtolower($given_string) == $rev_string) echo $given_string.' is a Palindrome!';
else echo $given_string.' is not a palindrome.';

?>