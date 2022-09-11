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
            <span><a href="../index.php"> Sair ></a></span>
          </li>
        </ul>
      </nav>
      <main>
        <h1 id="titulo">Certificado<br /></h1>
        <br />
        <div id="criarcertificado">
          <div id="certificado">
            <p style="display: inline-block;">Certificamos que</p>
            <h2 style="display: inline-block;">nome-aluno,</h2>
            <p>em 31 de Janeiro de 2022, concluiu a atividade</p>
            <p>extensionista nome-atividade, com duração de 360 horas, divulgada
            pelo Departamento de Computação e dirigida pelo(a)</p>
            <p>responsável de projeto nome-responsavel.</p>
            <br><br>
            <div class="assinaturas">
              <div class="assinatura">
                <p>Assinatura do responsável</p>
              </div>
              <div class="assinatura"></div>
              <p>Assinatura do coordenador</p>
            </div><br><br><br><br>
            <img id="qrcode" src="../imagens/qrcode.png" alt="qrcode">
            <div class="right" style="position: relative;">
              <a href="./index.php">
              <button class="btn" id="concluir" name="concluir">Enviar</button>
              </a>
            </div>        
          </main>
          <?php include('../footer.php'); ?>
    </div>
  </body>
</html>