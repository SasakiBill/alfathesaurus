<?php
    include 'header.php';
    
?>
<div class="topnav">
        <img src="../view/img/Capturar-removebg-preview.png">
        <a href="#">Sobre</a>
        <a href="#">Contribua!</a>
        <a href="#">Tutoriais</a>
        <a href="#">Tesauros da Computação</a>
        <a href="../public/index.php">Página Inicial</a>  
    <div class="search-container">
    <form action="search.php" method="POST">
      <input type="text" placeholder="Busque aqui pelo tesauro..." name="search">
      <button type="submit" name="submit-search"><i class="fa fa-search">Go</i></button>
    </form>
  </div>
</div>
<h2>Trodoon - DICIONÁRIO GRATUÍTO DE SINÔNIMOS DA COMPUTAÇÃO</h2>


<div class ="cconceito-container">
    <h4 style="font-size: 36px">Página detalhada do Conceito</h4>
    <div class="conceito-container">
    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `conceito` WHERE idConceito=$id"; 
    $result = mysqli_query($conn, $sql);
 
    while($row = mysqli_fetch_assoc($result)){
        echo "ID: " . $row['idConceito']. "<br>";
        echo "<h4>Título do Conceito Preferêncial: </h4> <h5>" . $row['prefLabel'] . "</h5>";
        echo "<h4>Título do conceito em Inglês: </h4> <h5>" . $row['altLabelA'] . "</h5>";
        echo "<h4>Definição Acadêmica: </h4> <h5>" . $row['definitionA'] . "</h5>";
        echo "<h4>Definição Acadêmica em Inglês: </h4> <h5>" . $row['definitionB'] . "</h5>";
        echo "<h4>Definição da Comunidade: </h4> <h5>" . $row['definitionComun'] . "</h5>";
        echo "<h4>Conceito do tipo: </h4> <h5>" . $row['tipoConceito'] . ".</h5>";
        echo "<h4>Pertence ao Tesauro de: </h4> <h5>" . $row['pertenceTesauro'] . ".</h5>";
        echo "<h4>Sinônimos/Conceitos Relacinados:</h4>";

        /*
        if ($id == 2){
          echo "<a href='resultSearch.php?threadid=79'>Algoritmo</a>";
          echo "teste";
        }*/

        switch ($id){
          case 2:
            echo "<a href='resultSearch.php?threadid=11'>Eixo 1 - Resolução de Problemas</a><br>";
            echo "<a href='resultSearch.php?threadid=24'>Eixo 2 - Desenvolvimento de Sistemas</a><br>";
            echo "<a href='resultSearch.php?threadid=37'>Eixo 3 - Desenvolvimento de Projetos</a><br>";
            echo "<a href='resultSearch.php?threadid=47'>Eixo 4 - Implementação de Sistemas</a><br>";
            echo "<a href='resultSearch.php?threadid=60'>Eixo 5 - Gestão de Infraestrutura</a><br>";
            echo "<a href='resultSearch.php?threadid=69'>Eixo 6 - Aprendizado Contínuo e Autônomo</a><br>";
            echo "<a href='resultSearch.php?threadid=78'>Eixo 7 - Ciência, Tecnologia e Inovação</a><br>";
            echo "<a href='resultSearch.php?threadid=73'>C.7.5 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação para o desenvolvimento de software e hardware e suas aplicações.</a><br>";

            
            break;
          case 3:
            echo "<a href='resultSearch.php?threadid=79'>Algoritmo</a>";
            break;
          case 4:

            break;
          case 5:

            break;
            
          case 6:

            break;
          case 7:

            break;
          case 8:

            break;
        }

    }

    
    
   

    ?>
    </div>
</div>