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
include('header.php')
;?>
      <main>
        <h1 id="titulo">Novo Relatório<br /></h1>
        <br />
        <div id="novo-relatorio">
          <p><b>Projeto: </b> PET</p><br>
          <p><b>Responsável: </b> Prof. Serra</p><br>
          <table id="atividades-realizadas"> <!--linhas alternam cor-->
            <tr>
              <th>Atividades Realizadas</th>
              <th>Horas gastas</th>
            </tr>
            <tr>
              <td>
                <b>"Título da atividade"
                <input id="anexar" name ="anexar-arquivo" type="file">
              </td>
              <td>
                <input id="horas" type="number">
              </td>
            </tr>
          </table><br>
          <button class="btn" id="nova-atividade">Nova atividade +</button>
          <div id="botoes" class="right">
            <a href="../aluno/index.php">
            <button class="btn" id="cancelar">Cancelar</button>
            </a>&nbsp;&nbsp;
            <a href="../aluno/index.php">
            <button class="btn" id="enviar-relatorio">Enviar Relatório</button>
            </a>
          </div>
                    
        </div>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
