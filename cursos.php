<?php
    session_start();
    include_once('config.php');
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM user WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM user ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR" >
<head>
  <meta charset="UTF-8">
  <title>Plataforma de Aprendizado Online</title>
  <link rel="icon" type="image/x-icon" href="images/pesquisa.png">
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap'>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- MENU -->

<nav class="sidebar close">
  <header>
    <div class="image-text">
      <span class="image">
        <img src="images/pesquisa.png" alt="Gabriel">
      </span>
      <div class="text logo-text">
      <?php
        echo "<span<u>$logado</u></span>";
      ?>
        <span class="profession">I learn</span>
      </div>
    </div>
    <i class='bx bx-chevron-right toggle'></i>
  </header>
  <div class="menu-bar">
    <div class="menu">
      <li class="search-box">
        <i class='bx bx-search icon'></i>
        <input type="text" placeholder="Pesquisar...">
      </li>
      <ul class="menu-links">
        <li class="nav-link">
          <a href="index.html">
            <i class='bx bx-home-alt icon'></i>
            <span class="text nav-text">Inicio</span>
          </a>
        </li>
        <li class="nav-link">
          <a href="quem-somos.html">
            <i class='bx bx-group icon'></i>
            <span class="text nav-text">Quem somos</span>
          </a>
        </li>
        <li class="nav-link" >
          <a href="cursos.html">
            <i class='bx bx-folder icon'></i>
            <span class="text nav-text">Cursos</span>
          </a>
        </li>

        <!-- <li class="nav-link">
          <a href="forum.html">
            <i class='bx bx-pie-chart-alt icon'></i>
            <span class="text nav-text">Forum</span>
          </a>
        </li> -->

        <li class="nav-link">
          <a href="contato.html">
            <i class='bx bx-info-circle icon'></i>
            <span class="text nav-text">Contato</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="bottom-content">
      <li class="">
        <a href="sair.php">
          <i class='bx bx-log-out icon'></i>
          <span class="text nav-text">Sair</span>
        </a>
      </li>
      <li class="mode">
        <div class="sun-moon">
          <i class='bx bx-moon icon moon'></i>
          <i class='bx bx-sun icon sun'></i>
        </div>
        <span class="mode-text text">Modo Escuro</span>

        <div class="toggle-switch">
          <span class="switch"></span>
        </div>
      </li>
    </div>
  </div>

</nav>

<!-- HOME -->
<section>
  <div class="container">
    <div class="card">
        <div class="circle">
            <h2>Front-End</h2>
        </div>
        <div class="content">
            <p>Descubra o mundo do desenvolvimento Front-end e dê vida às suas ideias online e aprimore seus conhecimentos!</p>
            <a href="front.html">Saiba mais</a>
        </div>
    </div>
    <div class="card">
        <div class="circle">
            <h2>Back-End</h2>
        </div>
        <div class="content">
            <p>Explore o fascinante universo do desenvolvimento Back-end e construa bases sólidas para sistemas robustos e eficientes! </p>
            <a href="back.html">Saiba mais</a>
        </div>
    </div>
    <div class="card">
        <div class="circle">
            <h2>Banco de Dados</h2>
        </div>
        <div class="content">
            <p>Desvende os segredos do mundo dos bancos de dados e domine a gestão de informações de forma eficiente e segura!</p>
            <a href="banco.html">Saiba mais</a>
        </div>
    </div>
</section>

<script src="js/script.js"></script>
</body>
</html>
