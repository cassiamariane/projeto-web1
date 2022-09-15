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
        <h1 id="titulo">Relatório<br /></h1>
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
          <table id="atividades-realizadas">
            <!--linhas alternam cor-->
            <tr>
              <th>Atividades Realizadas</th>
              <th>Horas gastas</th>
            </tr>
            <tr>
              <td style="display: flex; justify-content: space-between">
                <b>"Título da atividade 1"</b>
                <button class="btn" id="atividade">atividade1.pdf</button>
              </td>
              <td id="h"><b>3h</b></td>
            </tr>
            <tr>
              <td style="display: flex; justify-content: space-between">
                <b>"Título da atividade 2"</b>
                <button class="btn" id="atividade">atividade2.pdf</button>
              </td>
              <td id="h"><b>2h</b></td>
            </tr>
            <tr>
              <td style="display: flex; justify-content: space-between">
                <b>"Título da atividade 3"</b>
                <button class="btn" id="atividade">atividade3.pdf</button>
              </td>
              <td id="h"><b>8h</b></td>
            </tr>
          </table>
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
            cols="34"
            rows="10"
          ></textarea>
          <div id="recusar-validar">
            <a href="./index.php">
              <button class="btn" id="recusar">Recusar</button>
            </a>
            &nbsp;&nbsp;&nbsp;
            <a href="./index.php">
              <button class="btn" id="aceitar-solicitacao">
                Validar Relatório
              </button>
            </a>
          </div>

          <div class="clear"></div>
        </div>
        <br />
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
