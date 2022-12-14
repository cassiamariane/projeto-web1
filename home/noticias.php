<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      PROGAE - Programa de Gerenciamento de Atividades Extensionistas
    </title>
    <link rel="stylesheet" href="../geral.css" />
    <link rel="stylesheet" href="style.css" />
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
          <li><a href="./noticias.php"> Notícias</a></li>
          <div class="search-box">
            <input type="text" />
            <img src="../imagens/lupa.png" alt="" />
          </div>
          <li class="dropdown">
            <span>Entrar ></span>
            <div class="dropdown-content">
              <a href="../aluno/login.php">Sou aluno</a>
              <a href="../responsavel/login.php">Sou professor</a>
            </div>
          </li>
        </ul>
      </nav>
      <main>
        <h1 id="titulo">Notícias<br /></h1>
        <br />
        <div id="noticia" class="left">
          <div id="imagem-noticia"></div>
          <div id="resumo-noticia">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </div>
        </div>
        <div id="noticia" class="right">
          <div id="imagem-noticia"></div>
          <div id="resumo-noticia">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </div>
        </div>
        <div class="clear"></div>
        <div id="noticia" class="left">
          <div id="imagem-noticia"></div>
          <div id="resumo-noticia">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </div>
        </div>
        <div id="noticia" class="right">
          <div id="imagem-noticia"></div>
          <div id="resumo-noticia">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </div>
        </div>
      </main>
      <footer>
        <address>
          <p>(21) 4002-8922 / (21) 91234-5678</p>
          <p>progae@ufrrj.br</p>
        </address>
        <img src="../imagens/rural_logo.png" alt="" />
        <img src="../imagens/proext.png" alt="" />
      </footer>
    </div>
  </body>
</html>
