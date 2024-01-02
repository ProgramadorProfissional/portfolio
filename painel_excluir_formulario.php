<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel ="icon" type="image/png"  href="abaportfolio.png">
    <link rel="stylesheet" href="formulario.css">
    <title> Portfólio Miquéias - Excluir Formulário</title>
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
    

<br> <br><br><br>


<center>
<?php
include("conexao.php");

$excluir = $_POST['excluir'];

// Primeiro, verifique se o registro a ser excluído existe no banco de dados
$verificar_sql = "SELECT * FROM formulario WHERE nome='$excluir'";
$verificar_query = mysqli_query($conexao, $verificar_sql);

if (mysqli_num_rows($verificar_query) > 0) {
    // O registro existe, então podemos excluí-lo
    $sql = "DELETE FROM formulario WHERE nome='$excluir'";
    
    if (mysqli_query($conexao, $sql)) {
        echo "<img class='certo' src='certo.png'>  &nbsp &nbsp &nbsp";
        echo "<h1 class='mensagem'> Mensagem excluida </h1>";
    } else {
        echo "Erro ao excluir o cadastro: " . mysqli_error($conexao);
    }
} else {
    // O registro não existe, então exiba a mensagem de "Cadastro não encontrado"
    echo "<img class='certo' src='excluir.png'>  &nbsp;  &nbsp;  &nbsp;";
    echo "<h1 class='mensagem'> Mensagem não encontrada, por favor<br> digite o nome completo corretamente  </h1>";
}

mysqli_close($conexao);
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>