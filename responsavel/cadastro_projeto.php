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
      <main class="login cadastro">
        <h1 id="titulo">Novo Projeto<br /></h1>
        <br />
        <form action="./index.php" method="get">
          <label for="nome">Nome do projeto: *</label>
          <input
            type="text"
            id="nome"
            name="nome"
            autofocus
            placeholder="Ex: PET"
            style="width: 100%"
          />
          <label for="area" name="area">Área de aplicação: *</label>
          <select name="area" id="area">
            <option value="ciencias-biologicas">Ciências Biológicas</option>
            <option value="ciencias-saude">Ciências da Saúde</option>
            <option value="ciencias-exatas">Ciências Exatas e da Terra</option>
            <option value="ciencias-humanas">Ciências Humanas</option>
            <option value="ciencias-sociais">Ciências Sociais Aplicadas</option>
            <option value="engenharias">Engenharias</option>
            <option value="interdisciplinar">Interdisciplinar</option>
            <option value="linguistica">Linguística, Letras e Artes</option>
          </select>
          <br />
          <br />
          <label for="objetivo">Objetivo: *</label>
          <br />
          <textarea
            name="objetivo"
            id="objetivo"
            cols="30"
            rows="10"
          ></textarea>

          <div id="enviar" class="right">
            <a href="./index.php" id="enviar-projeto">
              <button class="btn" style="width: 160px">Enviar</button>
            </a>
          </div>
          <div class="clear"></div>
        </form>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
