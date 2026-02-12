<?php
/*
Autores: Lucas Nakashima, Ana Luiza
Data: 2025
Descrição: Página para editar cliente
*/
require 'db.php';

if(!isset($_GET['id'])){ die("ID do cliente não informado."); }
$id = intval($_GET['id']);
$cliente = buscarCliente($id);
if(!$cliente){ die("Cliente não encontrado."); }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Cliente</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="menu-principal">
  <ul>
    <li><a href="home.php"> Início</a></li>
    <li><a href="index.php">Cadastrar Cliente</a></li>
    <li><a href="dados.php" class="ativo"> Clientes</a></li>
    <li><a href="sobre.php"> Sobre</a></li>
    <li><a href="contato.php"> Contato</a></li>
  </ul>
</nav>

<div class="container-principal">
  <h1>Editar Cliente</h1>
  <form action="validar.php" method="POST" class="formulario-cliente">
    <input type="hidden" name="id" value="<?= $cliente['id'] ?>">
    <input type="text" name="nome_cliente" value="<?= $cliente['nome_cliente'] ?>" required>
    <input type="text" name="telefone" value="<?= $cliente['telefone'] ?>" required>
    <input type="text" name="nome_pet" value="<?= $cliente['nome_pet'] ?>" required>
    <button type="submit">Salvar Alterações</button>
  </form>
</div>

</body>
</html>
