<?php 
// password length
$length = $_GET['length'] ?? '';


$letters = $_GET['letters'] ?? '';
$numbers = $_GET['numbers'] ?? '';
$simbols = $_GET['simbols'] ?? '';

$repeat = $_GET['repeat'] ?? '';
$password = '';


// //character
$all_char = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","0", "1", "2", "3", "4", "5", "6", "7", "8", "9","!","@", "#", "$", "%", "^", "&", "*", "-", "+", "/", "?"];

$letter = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

$arr_number = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

$special_char = ["!","@", "#", "$", "%", "^", "&", "*", "-", "+", "/", "?"];




function getRandomCharacters($array, $length = 10) {
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $temp = rand(0, count($array) - 1);
        $password .= $array[$temp];
    }
    return $password;
}


if (isset($_GET['generate'])) {
    if ($letters) {
        $password .= getRandomCharacters($letter, $length);
    }
    if ($numbers) {
        $password .= getRandomCharacters($arr_number, $length);
    }
    if ($simbols) {
        $password .= getRandomCharacters($special_char, $length);
    }
    // else{
    //     $password .= getRandomCharacters($all_char, $length);
    // }
} 

?>