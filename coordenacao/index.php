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
        <h1 id="titulo">Projetos<br /></h1>
        <br />
        <h2 style="color: #14387f">Projeto Web 0</h2>
        <br />
        <div id="projeto">
          <div id="objetivo" class="left">
            <h3>Responsável: &nbsp;Prof. Tiago Cruz</h3>
            <br />
            <h3>Objetivo: &nbsp;Projeto de artigos acadêmicos</h3>
          </div>
            <div id="notificacoes" class="right">
              <p><b>Nenhuma nova notificação</b></p>
              <br />
              <div id="notif"><p>0</p></div>
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
