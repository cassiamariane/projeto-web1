<!--

  Feito por:

  Cássia Mariane
  Caio Fernandes
  Daniel Vinicius
  
  Sistemas de Informação 2021.1 - UFRRJ
  
-->

<?php 
require '../database/connection.php';
//session
session_start();
if(!isset($_SESSION['signedin']) or $_SESSION['signedin'] == false){
  header("location: login.php");
}
$sql = "SELECT * FROM projeto";
$query = mysqli_query($connect, $sql);
include('header.php');

//buscar os projetos que o aluno faz parte
?>
      <main>
        <h1 id="titulo">Projetos Ativos<br /></h1>
        <br />
        <?php
        while($projetos = mysqli_fetch_array($query)){
          $nome = $projetos['nome'];
          $descricao = $projetos['descricao'];
            ?>
        <h2 style="color: #14387F;"><?php echo $nome;?></h2>
        <br>
        <div id="projeto">
          <div id="objetivo" class="left">
            <h3>Descrição: &nbsp;<?php echo $descricao;?></h3>
          </div>
          <a href="./visualizar_mensagem.php"> 
            <div id="notificacoes" class="right">
              <p><b> Mensagem</b></p>
              <hr>
              <p><b> Feedback</b></p>
              <hr>
              <p><b> Aviso</b></p>
              <hr>
              <br>
              <div id="notif"><p>3</p></div>
            </div>
          </a> 
            <div class="clear"></div>
            <div id="progresso">
              <label for="progresso"><h2>Progresso</h2></label>
              <progress id="progresso" value="0" max="360">50%</progress>
              <h2 style="display: inline;">0h/360h</h2>
              <h3>Horas obtidas do último relatório: 40h</h3>
            </div>
          </div>
        <br>
        <div id="envio">
          <div id="alerta" class="left">
            <h3 style="color: #D61313;">*VOCÊ AINDA NÃO ENVIOU O<br>
            RELATÓRIO REFERENTE A (mes)!</mes></h3>
          </div>
          <div id="sair-novo" class="right">
            <button class="btn" id="sair">Sair do Projeto</button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="./enviar_relatorio.php">
            <button class="btn" id="novo">Novo Relatório</button>
            </a>
          </div>
          <div class="clear"></div>
        </div><br><br>
        <?php }; ?><hr>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
