<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "clinica";

$con = mysqli_connect($host, $usuario, $senha, $banco);
if(!$con){
    die("Erro ao conectar ao banco: ".mysqli_connect_error());
}
?>
