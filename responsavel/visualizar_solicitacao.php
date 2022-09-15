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
include('header.php'); ?>
      <main>
        <h1 id="titulo">Solicitação do aluno<br /></h1>
        <br />
        <div id="solicitacao">
          <p><b>Projeto:</b> &nbsp;PET</p>
          <br />
          <p><b>Aluno:</b> &nbsp;Nome</p>
          <br />
          <p><b>Matrícula:</b> &nbsp;0000000000</p>
          <br />
          <p><b>Curso:</b> &nbsp;Sistemas de Informação</p>
          <br />
          <p><b>Período:</b> &nbsp;2° (segundo)</p>
          <br />
          <p><b>Mensagem:</b></p>
          <br />
          <div id="mensagem">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
            lobortis tortor id enim laoreet hendrerit. Donec tempor, risus in
            vulputate pharetra, lorem est tincidunt mauris, sed maximus nisl
            augue sit amet erat. Vivamus eget ligula ut nisi tempus sollicitudin
            at ut nunc. Etiam sed nunc rhoncus, dictum tortor quis, vehicula
            sapien.
          </div>
          <br />
          <div style="display: flex; align-items: center; gap: 10px">
            <img id="carta" src="../imagens/email.png" alt="enviar" />
            <label for="mensagem-aluno"
              ><b>Enviar mensagem para o aluno(a)</b></label
            >
          </div>
          <textarea
            name="mensagem-aluno"
            id="mensagem-aluno"
            cols="30"
            rows="10"
          ></textarea>
          <div class="right">
            <a href="./index.php">
              <button class="btn" id="recusar">Recusar</button>
            </a>
            &nbsp;&nbsp;&nbsp;
            <a href="./index.php">
              <button class="btn" id="aceitar-solicitacao">
                Aceitar Solicitação
              </button>
            </a>
          </div>
          <div class="clear"></div>
        </div>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
