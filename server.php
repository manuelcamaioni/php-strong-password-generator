<?php 
$passwordLength = $_GET['pwlength'];

empty($_GET['repetition']) ? $repeat = 'Yes' : $repeat = $_GET['repetition'];
empty($_GET['symbols']) ? $symbols = 'off' : $symbols = $_GET['symbols'];
empty($_GET['numbers']) ? $numbers = 'off' : $numbers = $_GET['numbers'];
empty($_GET['letters']) ? $letters = 'off' : $letters = $_GET['letters'];

include_once __DIR__ . "/utilities/functions.php";

if(!empty($passwordLength)) $generatedPassword = createPassword($passwordLength, $repeat, $symbols, $numbers, $letters);
echo 'Password generata: ' . $generatedPassword;
?>