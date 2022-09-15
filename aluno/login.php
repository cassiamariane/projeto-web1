<!--

  Feito por:

  Cássia Mariane
  Caio Fernandes
  Daniel Vinicius
  
  Sistemas de Informação 2021.1 - UFRRJ
  
-->

<?php 
  require "valida_login.php";
  include('header.php');
?>
      <main class="login">
        <h1 id="titulo">Login<br /></h1>
        <br />
        <div class="form-container">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
          <?php
          if (!empty($errors)) {
              foreach ($errors as $error){
                  echo "<p>$error</p>";
                }
              }
          ?>
            <label for="identifier">E-mail ou nome de usuário:</label>
            <input type="text" id="identifier" name="identifier" autofocus />
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" />
            <a href="#"><small>Esqueci minha senha</small> </a>
            <button class="btn" id="btn-entrar">
              <a type="submit">Entrar</a>
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
