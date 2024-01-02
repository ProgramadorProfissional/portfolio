<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel ="icon" type="image/png"  href="abaportfolio.png">
    <link rel="stylesheet" href="formulario.css">
    <title> Portfólio Miquéias - Consultar mensagem enviada</title>
</head>
<body>

<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

    <header>
    <nav class="navbar  fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style=" background-color: #2F9FE8">
      <span class="navbar-toggler-icon"  ></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="poslogin.php">Voltar para o painel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.htm">Voltar para o site</a>
          </li>
         
         
      </div>
    </div>
  </div>
</nav>
    

<br> <br><br>



<?php
include("conexao.php");

$pesquisar = $_POST['pesquisar'];

$resultado = "SELECT * FROM formulario WHERE nome LIKE '%$pesquisar%' LIMIT 50";
$resultado_nome = mysqli_query($conexao, $resultado);

// Verifique se foram encontrados resultados
if (mysqli_num_rows($resultado_nome) > 0) {
    while ($rows_nome = mysqli_fetch_array($resultado_nome)) {
        echo  " &nbsp &nbsp <b style='color: #2F9FE8;'><b> Nome Completo: </b> <span style='color: #ffffff;'> " . $rows_nome['nome'] . " </span> <br>";
        echo "  &nbsp &nbsp <b style='color: #2F9FE8;'> <b>Email:  </b> <span style='color:  #ffffff;'>" . $rows_nome['email'] . " </span> <br>";
        echo " &nbsp &nbsp <b style='color: #2F9FE8;'> <b>Assunto:  </b> <span style='color:  #ffffff;'>" . $rows_nome['sobrenome'] . " </span> <br>";
        echo " &nbsp &nbsp <b style='color: #2F9FE8;'> <b> Mensagem:  </b> <span style='color:  #ffffff;'>" . $rows_nome['mensagem'] . " </span> <br><br><br>";
    }
}else {
  echo "  <center> <img class='certo' src='excluir.png'>  &nbsp;  &nbsp;  &nbsp; </center>";
  $mensagemNaoEncontrada = "<center><h1 style='color:  #ffffff;' class='mensagem'> Mensagem não encontrada,  Por favor <br> avisar para enviar novamente a mensagem </h1></center>";
  echo $mensagemNaoEncontrada;
  echo "<a href='index.htm'</a><br>";
}
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
</body>
</html>