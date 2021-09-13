<?php
    include 'header.php';
    header('Content-Type: text/html; charset=UTF-8');
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<body>
  <div class="topnav">
    <img src="../view/img/ultimate.png" />

    <a href="#">Acessibilidade</a>
    <a href="#">Sobre</a>
    <a href="#">Contribua!</a>
    <a href="#">Tutoriais</a>
    <a href="../public/tesauros.php">Tesauros da Computação</a>
    <a href="../public/index.php">Página Inicial</a>

  </div>

  <div class="titulo-container">
    <h2>Trodoon - DICIONÁRIO GRATUÍTO DE SINÔNIMOS DA COMPUTAÇÃO</h2>
    <div class="search-container">
      <form action="search.php" method="POST">
        <input type="text" placeholder="Busque aqui pelo tesauro..." name="search" />
        <button type="submit" name="submit-search"><i class="fa fa-search">Go</i></button>
      </form>
    </div>
  </div>


  <div class="tesauro-container">
  <h3>Tesauros da Computação Disponíveis:</h3>
      <ul style="list-style-type:disc">
        <li>
          <a href="search.php">Ciência da Computação</a>
        </li>
      </ul>
  </div>

  <div class="tesauro-hierarquico-container">
    <h1>Atual Nível Hierárquico:<h1>
        <div class="nivel-container">
          <h3>Ao pesquisar por algum conceito, aqui aparecerá em qual nível hierárquico você está!</h3>
        </div>
  </div>

  <footer class="fundo-container">
    Sistema web desenvolvido como objetivo de obtenção de nota na disciplina de Trabalho de Conclusão de Curso no curso de Ciência da Computação - Universidade Estadual do Centro-Oeste.
  </footer>
</body>