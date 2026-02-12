<!-- 
Grupo: Lucas Nakashima e Ana Luiza
Prof: Cintia
Descrição: Página Clinica Veterinaria
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro de Cliente</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="menu-principal">
  <ul>
    <li><a href="home.php"> Início</a></li>
    <li><a href="index.php" class="ativo"> Cadastro Cliente</a></li>
    <li><a href="dados.php"> Clientes</a></li>
    <li><a href="sobre.php"> Sobre</a></li>
    <li><a href="contato.php"> Contato</a></li>
  </ul>
</nav>

<div class="container-principal">
  <h1>Cadastro de Cliente</h1>
  <form action="validar.php" method="POST" class="formulario-cliente">
    <input type="text" name="nome_cliente" placeholder="Nome do Cliente" required>
    <input type="text" name="telefone" placeholder="Telefone (ex: (11) 91234-5678)" required>
    <input type="text" name="nome_pet" placeholder="Nome do Pet" required>
    <button type="submit">Cadastrar</button>
  </form>
</div>

</body>
</html>
