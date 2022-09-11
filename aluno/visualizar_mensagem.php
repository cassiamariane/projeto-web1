<!--

  Feito por:

  Cássia Mariane
  Caio Fernandes
  Daniel Vinicius
  
  Sistemas de Informação 2021.1 - UFRRJ
  
-->

<?php include('layout/header.php');?>
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
        <h1 id="titulo">Mensagem do responsável<br /></h1>
        <br />
        <div id="novo-relatorio">
          <p><b>Projeto:</b> PET</p>
          <br />
          <p><b>Responsável: </b> Prof. Serra</p>
          <br />
          <p><b>Assunto: </b> lorem ipsum</p>
          <br />
          <p><b>Mensagem: </b></p>
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
          <div
            class="msg"
            style="display: flex; align-items: center; gap: 10px"
          >
            <img src="../imagens/email.png" alt="" width="35px" />
            <p>Enviar mensagem para o responsável</p>
          </div>
          <textarea name="" id="" cols="60" rows="10"></textarea>
          <div id="botoes" class="right"></div>
          <a href="./index.php">
            <button id="enviar-relatorio" class="btn responder-responsavel">
              Responder
            </button>
          </a>
        </div>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
