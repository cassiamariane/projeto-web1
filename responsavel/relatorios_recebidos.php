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
      <main class="relatorios-recebidos">
        <h1 id="titulo">Relatórios<br /></h1>
        <br />

        <table>
          <tr>
            <th>Aluno</th>
            <th>Matrícula</th>
            <th>Curso</th>
            <th>Horas Propostas</th>
          </tr>

          <tr>
            <td>
              <a href="./visualizar_relatorio.php"> Nome </a>
            </td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>2h</td>
          </tr>
          <tr>
            <td>
              <a href="./visualizar_relatorio.php"> Nome </a>
            </td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>6h</td>
          </tr>
          <tr>
            <td>
              <a href="./visualizar_relatorio.php"> Nome </a>
            </td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>2h</td>
          </tr>
          <tr>
            <td>
              <a href="./visualizar_relatorio.php"> Nome </a>
            </td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>6h</td>
          </tr>
          <tr>
            <td>
              <a href="./visualizar_relatorio.php"> Nome </a>
            </td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>8h</td>
          </tr>
          <tr>
            <td>
              <a href="./visualizar_relatorio.php"> Nome </a>
            </td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>2h</td>
          </tr>
          <tr>
            <td>
              <a href="./visualizar_relatorio.php"> Nome </a>
            </td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>8h</td>
          </tr>
          <tr>
            <td>
              <a href="./visualizar_relatorio.php"> Nome </a>
            </td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>6h</td>
          </tr>
        </table>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
