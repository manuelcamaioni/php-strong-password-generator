<?php 
$passwordLength = $_GET['pwlength'];

include_once __DIR__ . "/utilities/functions.php";

if(!empty($passwordLength)) $generatedPassword = createPassword($passwordLength);
echo 'Password generata: ' . $generatedPassword;
?>