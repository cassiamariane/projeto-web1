<!--

  Feito por:

  Cássia Mariane
  Caio Fernandes
  Daniel Vinicius
  
  Sistemas de Informação 2021.1 - UFRRJ
  
-->

<?php 
require './database/connection.php';
session_start();
$buscar_projetos = "SELECT * FROM projeto";
$query_projetos = mysqli_query($connect, $buscar_projetos);
include('header.php');
?>
      <main>
        <h1 id="titulo">Projetos Abertos<br /></h1>
        <br />

        <table id="projetos-abertos">
          <tr>
            <th>Projeto</th>
            <th>Data de Início</th>
            <th>Vagas Ocupadas</th>
          </tr>
          <?php
            while($recebe_projetos = mysqli_fetch_array($query_projetos)){
              $nome = $recebe_projetos['nome'];
              $data = $recebe_projetos['data_inicio'];
          ?>
          <tr>
            <td><a href="./aluno/inscricao_projeto.php"><?php echo $nome;?></a></td>
            <td><?php echo $data;?></td>
            <td>0</td>
          </tr>
          <?php }; ?>
        </table>
      </main>
      <?php include('./footer.php'); ?>
    </div>
  </body>
</html>
