<?php
    include 'header.php';
    
?>
<div class="topnav">
  <!--<img src="../view/img/Capturar-removebg-preview.png"/>-->

  <a href="#">Acessibilidade</a>
  <a href="#">Sobre</a>
  <a href="#">Contribua!</a>
  <a href="#">Tutoriais</a>
  <a href="#">Tesauros da Computação</a>
  <a href="../public/index.php">Página Inicial</a>
  <a href="#">UNICENTRO</a>
  
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



<div class ="cconceito-container">
    <h3 style="font-size: 26px">Página detalhada do Conceito</h3>
    <div class="conceito-container">
    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `conceito` WHERE idConceito=$id"; 
    $result = mysqli_query($conn, $sql);
 
    while($row = mysqli_fetch_assoc($result)){
        echo "ID: " . $row['idConceito']. "<br>";
        echo "<h5>Título do Conceito Preferêncial: </h5> <h6>" . $row['prefLabel'] . "</h6>";
        echo "<h5>Título do conceito em Inglês: </h5> <h6>" . $row['altLabelA'] . "</h6>";
        echo "<h5>Definição Acadêmica: </h5> <h6>" . $row['definitionA'] . "</h6>";
        echo "<h5>Definição Acadêmica em Inglês: </h5> <h6>" . $row['definitionB'] . "</h6>";
        echo "<h5>Definição da Comunidade: </h5> <h6>" . $row['definitionComun'] . "</h6>";
        echo "<h5>Conceito do tipo: </h5> <h6>" . $row['tipoConceito'] . ".</h6>";
        echo "<h5>Pertence ao Tesauro de: </h5> <h6>" . $row['pertenceTesauro'] . ".</h6>";
        

        /*
        if ($id == 2){
          echo "<a href='resultSearch.php?threadid=79'>Algoritmo</a>";
          echo "teste";
        }*/

        switch ($id){
          case 2:
            echo "<div class='hierarquicod-container'>
                    <h1>Atual Nível Hierárquico:<h1> 
                    <div class='niveld-container'>
                    <h3>Concept Schema</h3>
                    <h1>Sinônimos/Conceitos Relacinados:</h1>
                    <a href='resultSearch.php?threadid=11'>Eixo 1 - Resolução de Problemas</a><br>
                    <hr width = “2” size = “100”>
                    <a href='resultSearch.php?threadid=24'>Eixo 2 - Desenvolvimento de Sistemas</a><br>
                    <hr width = “2” size = “100”>
                    <a href='resultSearch.php?threadid=37'>Eixo 3 - Desenvolvimento de Projetos</a><br>
                    <hr width = “2” size = “100”>
                    <a href='resultSearch.php?threadid=47'>Eixo 4 - Implementação de Sistemas</a><br>
                    <hr width = “2” size = “100”>
                    <a href='resultSearch.php?threadid=60'>Eixo 5 - Gestão de Infraestrutura</a><br>
                    <hr width = “2” size = “100”>
                    <a href='resultSearch.php?threadid=69'>Eixo 6 - Aprendizado Contínuo e Autônomo</a><br>
                    <hr width = “2” size = “100”>
                    <a href='resultSearch.php?threadid=78'>Eixo 7 - Ciência, Tecnologia e Inovação</a><br>
                    <hr width = “2” size = “100”>
                    <a href='resultSearch.php?threadid=73'>C.7.5 - Compreender os fatos essenciais, os conceitos, os princípios e as teorias relacionadas à Ciência da Computação para o desenvolvimento de software e hardware e suas aplicações.</a><br>
                    <hr width = “2” size = “100”>
                    </div>
                  </div>";
            
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