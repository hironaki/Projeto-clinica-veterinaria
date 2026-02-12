<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Clínica Veterinária</title>
<link rel="stylesheet" href="style.css">
<script src="banner.js" defer></script>
</head>
<body>

<header>
<nav class="menu-principal">
  <ul>
    <li><a href="home.php" class="ativo"> Início</a></li>
    <li><a href="dados.php"> Clientes</a></li>
    <li><a href="sobre.php"> Sobre</a></li>
    <li><a href="contato.php"> Contato</a></li>
  </ul>
</nav>

<div class="banner-rotativo">
    <img src="img/banner1.jpg" class="mostrar">
    <img src="img/banner2.jpg">
    <img src="img/banner3.jpg">
</div>
</header>

<br> <br> <br>

<nav class="menu-secundario">

    <a href="#servicos">NOSSOS SERVIÇOS</a>
		<a href="#contato">CONTATO RÁPIDO</a>

</nav>

<br> <br> <br>

<div class="container-principal">

  <section class="hero">
    <h1>Bem-vindo à Nossa Clínica Veterinária!</h1>
    <p>Cuidamos do seu pet com carinho e dedicação. Atendimento humanizado e equipe qualificada.</p>

    <a class="botao-link" href="index.php">Cadastrar Novo Cliente </a>

  </section>

  <section class="servicos">
    <a href="#servicos" id="servicos"><h2>Nossos Serviços</h2></a>

    <div class="cartoes-servicos">

      <div class="cartao-servico">
        <img src="img/consulta.jpg">
        <h3>Consulta Veterinária</h3>
        <p>Acompanhamento completo da saúde do seu pet.</p>
        <a href="contato.php" class="botao-link">Agende Agora</a>
      </div>

      <div class="cartao-servico">
        <img src="img/vacinacao.jpg">
        <h3>Vacinação</h3>
        <p>Vacinas atualizadas para cães e gatos.</p>
        <a href="contato.php" class="botao-link">Agende Agora</a>
      </div>

      <div class="cartao-servico">
        <img src="img/exame.jpg">
        <h3>Exames Laboratoriais</h3>
        <p>Exames rápidos e confiáveis para diagnóstico.</p>
        <a href="contato.php" class="botao-link">Agende Agora</a>
      </div>

      <div class="cartao-servico">
        <img src="img/banho.jpg">
        <h3>Banho e Tosa</h3>
        <p>Estética e higiene com cuidado e carinho.</p>
        <a href="contato.php" class="botao-link">Agende Agora</a>
      </div>

    </div>
  </section>

  <br> <br> <br>

  <footer>

  <section class="contato">
    <a href="#contato" id="contato"><h2>CONTATO RÁPIDO</h2></a>
    <ul class="informacoes-contato">
      <li>📞 Telefone: (11) 91234-5678</li>
      <li>✉️ E-mail: contato@clinicaveterinaria.com</li>
      <li>📍 Endereço: Rua dos Animais, 123 - São Paulo, SP</li>
    </ul>
  </section>

</footer>

</div>

</body>
</html>
