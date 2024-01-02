<?php

$servidor="localhost"; 
$usuario="root"; 
$senha=""; 
$dbname="miqueias";  

 $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
 if(!$conexao){
    die("Houve um erro: " .mysqli_connect_error());
 }
 mysqli_set_charset($conexao,"utf8")


?>