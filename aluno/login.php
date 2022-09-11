<!--

  Feito por:

  Cássia Mariane
  Caio Fernandes
  Daniel Vinicius
  
  Sistemas de Informação 2021.1 - UFRRJ
  
-->

<?php include('layout/header.php');?>
      <nav>
        <ul>
          <li><a href="../index.php">Projetos</a></li>
          <li><a href="../home/noticias.php"> Notícias</a></li>
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
      <main class="login">
        <h1 id="titulo">Login<br /></h1>
        <br />
        <div class="form-container">
          <form>
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email" autofocus />
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" />
            <a href="#"><small>Esqueci minha senha</small> </a>
            <button class="btn" id="btn-entrar">
              <a href="./index.php">Entrar</a>
            </button>
            <a href="./cadastro.php" class="nao-possui-conta"
              >Não possui conta? Cadastre-se</a
            >
          </form>
        </div>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
