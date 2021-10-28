<?php 
function login($u, $d, $e, $c){
$validoUS = "roxana";
$dniValido= "22586256";
$emailValido="rlavazza@gmail.com";
$passValida = "4d186321c1a7f0f354b297e8914ab240";  
  if ($u == $validoUS && $d == $dniValido && $e == $emailValido && $c == $passValida){
     return "Logeo exitoso";
 }
 else {
    return "Datos invalidos";
 }
}
?>    