<?php

function login($u,$e,$c) {
$validoUS = "roxana";
$emailValido="rlavazza@gmail.com";
$passValida = "e97a9daede1b082531118bc6a05c6d14";    
  if ($u == $validoUS && $e == $emailValido && $c == $passValida){
     return "Login exitoso";
} 
else 
{
    header("Location: index.php");
    
}
}



?>