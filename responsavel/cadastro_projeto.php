<!--

  Feito por:

  Cássia Mariane
  Caio Fernandes
  Daniel Vinicius
  
  Sistemas de Informação 2021.1 - UFRRJ
  
-->

<?php
session_start();
if(!isset($_SESSION['signedin']) or $_SESSION['signedin'] == false){
  header("location: login.php");
}
require "valida_cadastro_projeto.php";
include('header.php'); 
?>
      <main class="login cadastro">
        <h1 id="titulo">Novo Projeto<br /></h1>
        <br />
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
          <label for="nome">Nome do projeto: *</label>
          <input
            type="text"
            id="nome"
            name="nome"
            autofocus
            placeholder="Ex: PET"
            style="width: 100%"
          />
          <br />
          <label for="objetivo">Objetivo: *</label>
          <br />
          <textarea
            name="objetivo"
            id="objetivo"
            cols="30"
            rows="10"
          ></textarea>

          <div id="enviar" class="right">
            <a href="./index.php" id="enviar-projeto">
              <button class="btn" style="width: 160px">Enviar</button>
            </a>
          </div>
          <div class="clear"></div>
        </form>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
