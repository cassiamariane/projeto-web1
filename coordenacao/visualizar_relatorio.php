<!--

  Feito por:

  Cássia Mariane
  Caio Fernandes
  Daniel Vinicius
  
  Sistemas de Informação 2021.1 - UFRRJ
  
-->

<?php include('header.php'); ?>
      <nav>
        <ul>
          <li><a href="../index.php">Projetos</a></li>
          <li><a href="../home/noticias.php"> Notícias</a></li>
          <div class="search-box">
            <input type="text" />
            <img src="../imagens/lupa.png" alt="" />
          </div>
          <li class="dropdown">
            <span><a href="../index.php">Sair ></a> </span>
          </li>
        </ul>
      </nav>
      <main>
        <h1 id="titulo">Relatórios<br /></h1>
        <br />
        <div id="relatorio-coord">
          <p><b>Projeto:</b> PET</p>
          <br />
          <p><b>Aluno: </b> Nome</p>
          <br />
          <b> Matrícula: </b> 00000000000 </p>
          <br />
          <p><b>Curso: Sistemas de informação</b></p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
            lobortis tortor id enim laoreet hendrerit. Donec tempor, risus in
            vulputate pharetra, lorem est tincidunt mauris, sed maximus nisl
            augue sit amet erat. Vivamus eget ligula ut nisi tempus sollicitudin
            at ut nunc. Etiam sed nunc rhoncus, dictum tortor quis, vehicula
            sapien.
          </p>
          <br />
          <br />
          <table>
            <tr>
              <th>Atividades</th>
              <th>Horas consideradas</th>
            </tr>
            <tr>
              <td>
                <div>
                  <p>Título da atividade</p>
                  <p>atividade.pdf</p>
                </div>
              </td>
              <td>
                <p>3h</p>
                <input type="checkbox" >
              </td>
            </tr>
            <tr>
              <td>
                <div>
                  <p>Título da atividade</p>
                  <p>atividade.pdf</p>
                </div>
              </td>
              <td>
                <p>3h</p>
                <input type="checkbox" checked>
              </td>
            </tr>
            <tr>
              <td>
                <div>
                  <p>Título da atividade</p>
                  <p>atividade.pdf</p>
                </div>
              </td>
              <td>
                <p>3h</p>
                <input type="checkbox" checked>
              </td>
            </tr>
          </table>
          <div style="display: flex; align-items: center; gap: 10px;">
            <img width="35px" id ="carta" src="../imagens/email.png" alt="enviar">
            <label for="mensagem-aluno"><b>Enviar mensagem para o aluno(a)</b></label>
          </div>
          <textarea name="mensagem-aluno" id="mensagem-aluno" cols="36" rows="5"></textarea>
          
          <div id="botoes" class="right login" style="display: flex; gap: 10px;">
            <a href="./index.php">
            <button class="btn recusar" style="background: #FF2233;">
              Recusar
            </button>
            </a>
            <a href="./index.php">
            <button class="btn validar">
              Validar relatório
            </button>
            </a>
          </div>
          
        </div>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
