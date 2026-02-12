<?php
if(isset($_GET['erro'])){
    $msg = '';
    switch($_GET['erro']){
        case 'id': $msg = "ID do cliente não informado."; break;
        case 'nome': $msg = "Nome inválido! Use apenas letras."; break;
        case 'telefone': $msg = "Telefone inválido! Digite um número válido."; break;
        case 'pet': $msg = "Nome do pet inválido! Use apenas letras."; break;
        case 'atualizar': $msg = "Erro ao atualizar cliente!"; break;
    }
    if($msg != '') {
        echo "<div class='alert alert-erro'>$msg</div>";
    }
}

if(isset($_GET['sucesso'])){
    echo "<div class='alert alert-sucesso'>Cliente atualizado com sucesso!</div>";
}
?>

<?php
require 'db.php';
$clientes = listar();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Clientes Cadastrados</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="menu-principal">
  <ul>
    <li><a href="home.php"> Início</a></li>
    <li><a href="index.php"> Cadastro Cliente</a></li>
    <li><a href="dados.php" class="ativo">👥 Clientes</a></li>
    <li><a href="sobre.php"> Sobre</a></li>
    <li><a href="contato.php"> Contato</a></li>
  </ul>
</nav>

<div class="container-principal">
  <h1>Clientes Cadastrados</h1>
  <div class="cartoes">
    <?php if(empty($clientes)){ echo "<p>Nenhum cliente cadastrado.</p>"; } ?>
    <?php foreach($clientes as $c){ ?>
      <div class="cartao">
        <h2><?= $c['nome_cliente'] ?></h2>
        <p>Tel: <?= $c['telefone'] ?></p>
        <p>Pet: <?= $c['nome_pet'] ?></p>
        <div class="acoes-cartao">
          <a href="editar.php?id=<?= $c['id'] ?>">Editar</a>
          <a href="excluir.php?id=<?= $c['id'] ?>">Excluir</a>
        </div>
      </div>
    <?php } ?>
  </div>
  <a class="botao-link" href="index.php">Voltar ao Cadastro</a>
</div>

</body>
</html>
