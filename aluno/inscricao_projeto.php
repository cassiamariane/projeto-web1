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
require "valida_inscricao_projeto.php";
$id_projeto = $_GET["projeto"];
$sql = "SELECT * FROM Projeto WHERE id='$id_projeto'";
$query = mysqli_query($connect, $sql);
$result = $query->fetch_assoc();
$nome_projeto = $result['nome'];
$descricao_projeto = $result['descricao'];
$matricula = $_SESSION['matricula'];
include('header.php');
?>
      <main>
        <h1 id="titulo">Cadastro em Projeto de Extensão<br /></h1>
        <br />
        <div id="novo-relatorio">
          <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
          <p><b>Projeto:</b> &nbsp;<?php echo $nome_projeto?></p>
          <br />
          <p><b>Descrição:</b> &nbsp;<?php echo $descricao_projeto?></p>
          <br />
          <p><b>Carta/Solicitação:</b></p>
          <br />
          <input type="hidden" name="id_projeto" value="<?php echo $id_projeto; ?>">
          <input type="hidden" name="matricula_aluno" value="<?php echo $matricula; ?>">
          <br />
          <div class="right">
            <a href="../index.php">
              <button class="btn" id="cancelar">Cancelar</button>
            </a>
            &nbsp;&nbsp;&nbsp;
            <a href="./index.php">
              <button type="submit" class="btn" id="validar-relatorio">Enviar</button>
            </a>
          </div>
          <div class="clear"></div>
          </form>
        </div>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
