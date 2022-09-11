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
      <main class="solicitacoes">
        <h1 id="titulo">Solicitações<br /></h1>
        <br />
        <div>
          <p><b>Nome</b></p>
          <p><b>Matrícula</b></p>
          <p><b>Curso</b></p>
        </div>
        <div class="solicit">
          <p>Fulano Cicrano da Silva</p>
          <p>12344567890</p>
          <p>Sistemas de Informaçao</p>
          <a href="./visualizar_solicitacao.php">
            <div class="insc">Inscrição</div></a
          >
        </div>
        <div class="solicit">
          <p>Fulano Cicrano da Silva</p>
          <p>12344567890</p>
          <p>Sistemas de Informaçao</p>
          <a href="./visualizar_solicitacao.php">
            <div class="desist">Desistência</div></a
          >
        </div>
        <div class="solicit">
          <p>Fulano Cicrano da Silva</p>
          <p>12344567890</p>
          <p>Sistemas de Informaçao</p>
          <a href="./visualizar_solicitacao.php">
            <div class="insc">Inscrição</div></a
          >
        </div>
        <div class="solicit">
          <p>Fulano Cicrano da Silva</p>
          <p>12344567890</p>
          <p>Sistemas de Informaçao</p>
          <a href="./visualizar_solicitacao.php">
            <div class="msg">Mensagem</div></a
          >
        </div>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
