<?php 

function createPassword($length){
    include_once __DIR__ . "/variables.php";
    $newPassword = "";
    // if($length > 0 || !is_int($length)){
    //     return "Non sono stati inseriti dei dati validi";
    // } else{
       $join = $letters .= $digits .= $specialChars;
        for($i = 0; $i < $length; $i++){
            $offset = rand(0, strlen($join) - 1);
            $newPassword .= substr($join, $offset, 1);
        }
        return $newPassword;
    // }
}
?>
