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
$sql = "SELECT * FROM projeto";
$query = mysqli_query($connect, $sql);
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
            while($projetos = mysqli_fetch_array($query)){
              $id = $projetos['id'];
              $nome = $projetos['nome'];
              $data = $projetos['data_inicio'];
          ?>
          <tr>
            <td><a href="./aluno/inscricao_projeto.php?projeto=<?php echo $id?>"><?php echo $nome;?></a></td>
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
