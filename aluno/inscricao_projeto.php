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
require "valida_inscricao_projeto.php"
include('header.php');
?>
      <main>
        <h1 id="titulo">Cadastro em Projeto de Extensão<br /></h1>
        <br />
        <div id="novo-relatorio">
          <p><b>Projeto:</b> &nbsp;Agasalha Rural</p>
          <br />
          <p><b>Responsável:</b> &nbsp;Prof. Bernardo</p>
          <br />
          <p><b>Objetivo:</b> &nbsp;Ajudar grupos necessitados</p>
          <br />
          <p><b>Carta/Solicitação:</b></p>
          <br />
          <textarea name="solicitacao"cols="50" rows="10"></textarea>
          <br />
          <div class="right">
            <a href="../index.php">
              <button class="btn" id="cancelar">Cancelar</button>
            </a>
            &nbsp;&nbsp;&nbsp;
            <a href="./index.php">
              <button class="btn" id="validar-relatorio">Enviar</button>
            </a>
          </div>
          <div class="clear"></div>
        </div>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
