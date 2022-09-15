<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      PROGAE - Programa de Gerenciamento de Atividades Extensionistas
    </title>
    <link rel="stylesheet" href="./geral.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <header>
        <a href="index.php">
          <img src="./imagens/rural.png" />
          <div>
            <h1 id="titulo">PROGAE</h1>
            <h3 id="titulo">
              Programa de Gerenciamento de <br />
              Atividades Extensionistas
            </h3>
          </div>
        </a>
      </header>
      <nav>
        <ul>
          <li><a href="../index.php">Projetos</a></li>
          <li><a href="../home/noticias.php"> Notícias</a></li>
          <li class="dropdown">
          <?php
          if(isset($_SESSION['signedin']) && $_SESSION['signedin'] == true){
            echo "<a href=\"logout.php\">Sair ></a>";
          } else {
            echo "<span>Entrar ></span>
            <div class=\"dropdown-content\">
              <a href=\"./aluno/login.php\">Sou aluno</a>
              <a href=\"./responsavel/login.php\">Sou professor</a>
            </div>";
          }
          ?>
          </li>
        </ul>
      </nav>