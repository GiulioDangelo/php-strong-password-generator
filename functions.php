<?php 
// password length
$length = $_GET['length'] ?? '';
$length = (int) $length;

$letters = $_GET['letters'] ?? '';
$numbers = $_GET['numbers'] ?? '';
$simbols = $_GET['simbols'] ?? '';


// //character
$all_char = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()');

$lower_letter = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

$upper_letter = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

$arr_number = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

$special_char = ["!","@", "#", "$", "%", "^", "&", "*", "-", "+", "/", "?"];


function getRandomCharacters($array, $count) {
    shuffle($array);
    return array_slice($array, 0, $count);
};


?>