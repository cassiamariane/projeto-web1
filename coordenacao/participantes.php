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
            <a href="../index.php"><span>Sair ></span></a>
          </li>
        </ul>
      </nav>
      <main class="ver_participantes">
        <h1 id="titulo">Participantes<br /></h1>
        <br />
        <div class="table-title">
          <p><b>Nome</b></p>
          <p>
            <b>Matrícula</b>
          </p>
          <p>
            <b>Horas Validadas</b>
          </p>
          <p><b>Situação</b></p>
        </div>
        <div class="participante">
          <p>Fulano Cicrano da Silva</p>
          <p>12344567890</p>
          <p>360h/360h</p>
          <a href="./formulario_certificado.php">
            <div class="conclu">Concluído</div></a
          >
        </div>
        <div class="participante">
          <p>Fulano Cicrano da Silva</p>
          <p>12344567890</p>
          <p>360h/360h</p>
          <a href="./formulario_certificado.php">
            <div class="conclu">Concluído</div></a
          >
        </div>
        <div class="participante">
          <p>Fulano Cicrano da Silva</p>
          <p>12344567890</p>
          <p>30h/360h</p>
          <a href="./visualizar_relatorio.php">
            <div class="pendente">Pendente</div></a
          >
        </div>
        <div class="participante">
          <p>Fulano Cicrano da Silva</p>
          <p>12344567890</p>
          <p>360h/360h</p>
          <a href="./formulario_certificado.php">
            <div class="conclu">Concluído</div></a
          >
        </div>
        <div class="participante">
          <p>Fulano Cicrano da Silva</p>
          <p>12344567890</p>
          <p>48h/360h</p>
          <a href="./visualizar_relatorio.php">
            <div class="pendente">Pendente</div></a
          >
        </div>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
