<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "clinica";

$con = mysqli_connect($host, $usuario, $senha, $banco);
if(!$con){
    die("Erro ao conectar ao banco: ".mysqli_connect_error());
}

function inserir($nome, $telefone, $pet){
    global $con;
    $sql = "INSERT INTO clientes (nome_cliente, telefone, nome_pet) 
            VALUES ('$nome', '$telefone', '$pet')";
    return mysqli_query($con, $sql);
}

function listar(){
    global $con;
    $sql = "SELECT * FROM clientes ORDER BY id DESC";
    $res = mysqli_query($con, $sql);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function buscarCliente($id){
    global $con;
    $sql = "SELECT * FROM clientes WHERE id = $id LIMIT 1";
    $res = mysqli_query($con, $sql);
    return mysqli_fetch_assoc($res);
}

function editar($id, $nome, $telefone, $pet){
    global $con;
    $sql = "UPDATE clientes 
            SET nome_cliente='$nome', telefone='$telefone', nome_pet='$pet' 
            WHERE id=$id";
    return mysqli_query($con, $sql);
}

function excluir($id){
    global $con;
    $sql = "DELETE FROM clientes WHERE id = $id";
    return mysqli_query($con, $sql);
}
?>
