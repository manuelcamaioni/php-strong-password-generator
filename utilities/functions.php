<?php 

function createPassword($length, $repeatedChars, $symbolsCheck, $numbersCheck, $lettersCheck){
    include_once __DIR__ . "/variables.php";
    $newPassword = "";
    if($length <= 0 || !(is_numeric($length))){
        return "Non sono stati inseriti dei dati validi";
    } else{
        if($lettersCheck == 'off'){$letters = ''; $ucLetters = '';}
        if($symbolsCheck == 'off'){$specialChars = '';}
        if($numbersCheck == 'off'){$digits = '';}
        $join = $letters .= $ucLetters .= $digits .= $specialChars;

        for($i = 0; $i < $length; $i++){
            if($repeatedChars == 'Yes'|| empty($repeatedChars)){
                $offset = rand(0, strlen($join) - 1);
                $newPassword .= substr($join, $offset, 1);
            } else{ 
                $offset2 = rand(0, strlen($join) - 1);
                if(!(str_contains($newPassword, substr($join, $offset2, 1)))){
                    $newPassword .= substr($join, $offset2, 1);
                } else{
                        $i--;
                }
            }
        } return $newPassword;  
    }
}
?>
