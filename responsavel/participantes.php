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
      <main class="participantes">
        <h1 id="titulo">Participantes<br /></h1>
        <br />
        <table>
          <tr>
            <th>Nome</th>
            <th>Matrícula</th>
            <th>Curso</th>
            <th>Horas Concluídas</th>
          </tr>
          <tr>
            <td>Nome</td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>25h/360h</td>
          </tr>
          <tr>
            <td>Nome</td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>30h/360h</td>
          </tr>
          <tr>
            <td>Nome</td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>12h/360h</td>
          </tr>
          <tr>
            <td>Nome</td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>0h/360h</td>
          </tr>
          <tr>
            <td>Nome</td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>55h/360h</td>
          </tr>
          <tr>
            <td>Nome</td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>100h/360h</td>
          </tr>
          <tr>
            <td>Nome</td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>39h/360h</td>
          </tr>
          <tr>
            <td>Nome</td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>0h/360h</td>
          </tr>
          <tr>
            <td>Nome</td>
            <td>00000000000</td>
            <td>Sistemas de Informação</td>
            <td>220h/360h</td>
          </tr>
        </table>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
