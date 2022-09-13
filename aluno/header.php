<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      PROGAE - Programa de Gerenciamento de Atividades Extensionistas
    </title>
    <link rel="stylesheet" href="../geral.css" />
    <link rel="stylesheet" href="../login.css">
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <div class="container">
      <header>
        <a href="../index.php">
          <img src="../imagens/rural.png" />
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
          <div class="search-box">
            <input type="text" />
            <img src="../imagens/lupa.png" alt="" />
          </div>
          <li class="dropdown">
          <?php
          if(isset($_SESSION['signedin']) && $_SESSION['signedin'] == true){
            echo "<form action=\"<?php session_unset(); header(\"Location: ../index.php\");?>\">
            <a>Sair ></a>
          </form>";
          } else {
            echo "<a href=\"../index.php\"><span>Sair ></span></a>";
          }
          ?>
          </li>
        </ul>
      </nav>