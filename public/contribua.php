<?php
    include 'header.php';
    header('Content-Type: text/html; charset=UTF-8');
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<body>
  <div class="topnav">
    <img src="../view/img/ultimate-removebg-preview.png" />

    <a href="#">Acessibilidade</a>
    <a href="../public/sobre.php">Sobre</a>
    <a href="../public/contribua.php">Contribua!</a>
    <a href="../public/tutoriais.php">Tutoriais</a>
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


<div class="formulario-container">
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSefOVeSN-YBolJ0-922ecjMhxit6P0g2XDGJ_OQrwczTUY1SA/viewform?embedded=true" width="940" height="1088" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
</div>


  <footer class="fundo-contribua-container">
    Sistema web desenvolvido como objetivo de obtenção de nota na disciplina de Trabalho de Conclusão de Curso no curso de Ciência da Computação - Universidade Estadual do Centro-Oeste.
  </footer>
</body>