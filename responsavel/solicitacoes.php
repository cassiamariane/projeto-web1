<!--

  Feito por:

  Cássia Mariane
  Caio Fernandes
  Daniel Vinicius
  
  Sistemas de Informação 2021.1 - UFRRJ
  
-->

<?php
require '../database/connection.php';
require 'aceitar_solicitacao.php';
session_start();
if(!isset($_SESSION['signedin']) or $_SESSION['signedin'] == false){
  header("location: login.php");
}
$sql = "SELECT * FROM solicita";
$query = mysqli_query($connect, $sql);
include('header.php'); ?>
      <main class="solicitacoes">
        <h1 id="titulo">Solicitações<br /></h1>
        <br />
        <div>
          <p><b>Matrícula</b></p>
        </div>
        <?php
            while($projetos = mysqli_fetch_array($query)){
              $matricula = $projetos['matricula_aluno'];
              $id = $projetos['id_projeto'];
          ?>
            <div class="solicit">
          <p><?php echo $matricula;?></p>
          <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
          <input type="hidden" name="matricula_aluno" value="<?php echo $matricula ?>">
          <input type="hidden" name="id_projeto" value="<?php echo $id ?>">
            <button>Aceitar solicitação</button>
          </form>
          </div>
          <?php } ?>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
