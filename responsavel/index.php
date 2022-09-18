<!--

  Feito por:

  Cássia Mariane
  Caio Fernandes
  Daniel Vinicius
  
  Sistemas de Informação 2021.1 - UFRRJ
  
-->

<?php 
require '../database/connection.php';
session_start();
if(!isset($_SESSION['signedin']) or $_SESSION['signedin'] == false){
  header("location: login.php");
}
$buscar_projetos = "SELECT * FROM projeto";
$query_projetos = mysqli_query($connect, $buscar_projetos);
include('header.php'); ?>
      <main>
        <h1 id="titulo">Projetos Ativos<br /></h1>
        <br />
        <a href="./cadastro_projeto.php">
            <button id="novo-projeto" class="btn right">Novo projeto</button>
        </a>
        <?php
            while($recebe_projetos = mysqli_fetch_array($query_projetos)){
              $nome = $recebe_projetos['nome'];
              $descricao = $recebe_projetos['descricao'];?>
        <div style="display: flex; justify-content: space-between">
          <h2 style="color: #14387f"><?php echo $nome;?></h2>
        </div>
        <br />
        <div id="projeto">
          <div id="objetivo" class="left">
            <h3>Objetivo: &nbsp;<?php echo $descricao;?></h3>
          </div>
          <a href="./solicitacoes.php">
            <div id="notificacoes" class="right">
              <p><b> 2 solicitaçoes</b></p>
              <hr />
              <p><b> 2 desistências</b></p>
              <hr />
              <p><b> 1 mensagem</b></p>
              <hr />
              <br />
              <div id="notif"><p>5</p></div>
            </div>
          </a>
          <div class="clear"></div>
          <div id="progresso">
            <h2>Vagas</h2>
            <div class="progress-container">
              <div class="progress-bar">
                <div class="progress"></div>
              </div>
              <span id="vagas" style="display: inline">04/20</span>
            </div>
            <div id="btn-container">
              <a href="./participantes.php">
                <button class="btn" id="ver-participantes-btn">
                  Ver participantes
                </button>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="./relatorios_recebidos.php">
                <button class="btn" id="visualizar-relatorios-btn">
                  Visualizar relatórios
                </button>
              </a>
            </div>
          </div>
        </div>
        <?php }; ?>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
