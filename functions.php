<?php 
// password length
$length = $_GET['length'] ?? '';

$letters = $_GET['letters'] ?? '';
$numbers = $_GET['numbers'] ?? '';
$simbols = $_GET['simbols'] ?? '';

$repeat = $_GET['repeat'] ?? false;
$password = '';

//character
$all_char = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","0", "1", "2", "3", "4", "5", "6", "7", "8", "9","!","@", "#", "$", "%", "^", "&", "*", "-", "+", "/", "?"];

$letter = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

$arr_number = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

$special_char = ["!","@", "#", "$", "%", "^", "&", "*", "-", "+", "/", "?"];



function getRandomCharacters($array, $length,$repeat) {
    $password = '';
    $array_length = count($array);
    while (strlen($password) < $length) {
        $temp = rand(0, $array_length - 1);

        if($repeat){
            $password .= $array[$temp];
        }
        else{
            if (!str_contains($password, $array[$temp])) {
            $password .= $array[$temp];
            }
        }
    }
    return $password;
}


if (isset($_GET['generate'])) {
    $selected_arrays = [];
    if ($letters) {
        $selected_arrays = array_merge($selected_arrays, $letter);
    }
    if ($numbers) {
        $selected_arrays = array_merge($selected_arrays, $arr_number);
    }
    if ($simbols) {
        $selected_arrays = array_merge($selected_arrays, $special_char);
    }
    if (empty($selected_arrays)) {
        $selected_arrays = $all_char;
    }
    


    $password = getRandomCharacters($selected_arrays, $length,$repeat);
} 

?>