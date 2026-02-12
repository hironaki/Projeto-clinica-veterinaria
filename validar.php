<?php
require 'db.php';

$nome = isset($_POST['nome_cliente']) ? trim($_POST['nome_cliente']) : '';
$telefone = isset($_POST['telefone']) ? trim($_POST['telefone']) : '';
$pet = isset($_POST['nome_pet']) ? trim($_POST['nome_pet']) : '';

if(!preg_match("/^[A-Za-zÀ-ú\s]{2,}$/", $nome)){
    die("<p style='color:red; text-align:center;'>Digite um nome de cliente válido (apenas letras e espaços).</p>");
}

if(!preg_match("/^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/", $telefone)){
    die("<p style='color:red; text-align:center;'>Digite um número de telefone válido (ex: (11) 91234-5678).</p>");
}

if(!preg_match("/^[A-Za-zÀ-ú\s]{2,}$/", $pet)){
    die("<p style='color:red; text-align:center;'>Digite um nome de pet válido (apenas letras e espaços).</p>");
}

$sql = "INSERT INTO clientes (nome_cliente, telefone, nome_pet) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "sss", $nome, $telefone, $pet);

if(mysqli_stmt_execute($stmt)){
    header("Location: dados.php");
    exit;
} else {
    echo "<p style='color:red; text-align:center;'>Erro ao cadastrar cliente. Tente novamente.</p>";
}

mysqli_stmt_close($stmt);
mysqli_close($con);
?>
