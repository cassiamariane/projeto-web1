<!--

  Feito por:

  Cássia Mariane
  Caio Fernandes
  Daniel Vinicius
  
  Sistemas de Informação 2021.1 - UFRRJ
  
-->

<?php include('header.php');?>
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
      <main>
        <h1 id="titulo">Cadastro em Projeto de Extensão<br /></h1>
        <br />
        <div id="novo-relatorio">
          <p><b>Projeto:</b> &nbsp;Agasalha Rural</p>
          <br />
          <p><b>Responsável:</b> &nbsp;Prof. Bernardo</p>
          <br />
          <p><b>Objetivo:</b> &nbsp;Ajudar grupos necessitados</p>
          <br />
          <p><b>Área de aplicação:</b> &nbsp;Ciências Humanas/Psicologia</p>
          <br />
          <p><b>Carta/Solicitação:</b></p>
          <br />
          <textarea name="" id="" cols="50" rows="10"></textarea>
          <br />
          <div class="right">
            <a href="../index.php">
              <button class="btn" id="cancelar">Cancelar</button>
            </a>
            &nbsp;&nbsp;&nbsp;
            <a href="./index.php">
              <button class="btn" id="validar-relatorio">Enviar</button>
            </a>
          </div>
          <div class="clear"></div>
        </div>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
