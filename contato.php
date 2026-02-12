<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Contato</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="menu-principal">
  <ul>
    <li><a href="home.php"> Início</a></li>
    <li><a href="index.php"> Cadastro Cliente</a></li>
    <li><a href="dados.php"> Clientes</a></li>
    <li><a href="sobre.php"> Sobre</a></li>
    <li><a href="contato.php" class="ativo"> Contato</a></li>
  </ul>
</nav>

<div class="container-principal">
  <h1>Contato</h1>
  <ul class="informacoes-contato">
    <li> Telefone: (11) 91234-5678</li>
    <li> E-mail: contato@clinicaveterinaria.com</li>
    <li> Endereço: Rua dos Animais, 123 - São Paulo, SP</li>
  </ul>
  <h2>Formulário de Contato</h2>
  <form class="formulario-cliente">
    <input type="text" name="nome" placeholder="Seu nome" required>
    <input type="email" name="email" placeholder="Seu e-mail" required>
    <textarea name="mensagem" placeholder="Sua mensagem" rows="5" required></textarea>
    <button type="submit">Enviar</button>
  </form>
</div>

</body>
</html>
