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
      <main>
        <h1 id="titulo">Projetos Ativos<br /></h1>
        <br />
        <div style="display: flex; justify-content: space-between">
          <h2 style="color: #14387f">PET</h2>
          <a href="./cadastro_projeto.php">
            <button id="novo-projeto" class="btn right">Novo projeto</button>
          </a>
        </div>
        <br />
        <div id="projeto">
          <div id="objetivo" class="left">
            <h3>Objetivo: &nbsp;Projeto de artigos acadêmicos</h3>
          </div>
          <a href="./solicitacoes.php">
            <div id="notificacoes" class="right">
              <p><b> 2 solicitaçoes</b></p>
              <hr />
              <p><b> 2 desistências</b></p>
              <hr />
              <p><b> 1 mensagem</b></p>
              <hr />
              <br />
              <div id="notif"><p>5</p></div>
            </div>
          </a>
          <div class="clear"></div>
          <div id="progresso">
            <h2>Vagas</h2>
            <div class="progress-container">
              <div class="progress-bar">
                <div class="progress"></div>
              </div>
              <span id="vagas" style="display: inline">04/20</span>
            </div>
            <div id="btn-container">
              <a href="./participantes.php">
                <button class="btn" id="ver-participantes-btn">
                  Ver participantes
                </button>
              </a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="./relatorios_recebidos.php">
                <button class="btn" id="visualizar-relatorios-btn">
                  Visualizar relatórios
                </button>
              </a>
            </div>
          </div>
        </div>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
