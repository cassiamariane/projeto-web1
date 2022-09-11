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
      <main class="login cadastro">
        <h1 id="titulo">Certificado<br /></h1>
        <br />
        <form action="./certificado.php" method="get">
          <label for="nome">Nome completo: *</label>
          <input
            type="text"
            id="nome"
            name="nome"
            autofocus
            placeholder="Ex: João da Silva"
            style="width: 100%"
          />
          <div class="clear">&nbsp;</div>
          <div id="departamento" class="right">
            <label for="departamento">Departamento: *</label>
            <select name="departamento" id="departamento">
              <option value="ia">Agronomia (IA)</option>
              <option value="icbs">
                Ciências Biológicas e da Saúde (ICBS)
              </option>
              <option value="ice">Ciências Exatas (ICE)</option>
              <option value="ichs">Ciências Humanas e Sociais (ICHS)</option>
              <option value="icsa">Ciências Sociais Aplicadas (ICSA)</option>
              <option value="ie">Educação (IE)</option>
              <option value="if">Florestas (IF)</option>
              <option value="iq">Química (IQ)</option>
              <option value="it">Tecnologia (IT)</option>
              <option value="iv">Veterinária (IV)</option>
              <option value="iz">Zootecnia (IZ)</option>
            </select>
          </div>
          <div id="matricula" class="left">
            <label for="matricula">Matrícula: *</label>
            <input type="number" id="matricula" name="matricula" />
          </div>
          <div class="clear">&nbsp;</div>
          <div id="campus" class="right">
            <label for="campus">Câmpus de aplicação: *</label>
            <select id="campus" name="campus">
              <option value="seropedica">Seropédica (Sede)</option>
              <option value="nova-iguacu">Nova Iguaçu</option>
              <option value="tres-rios">Três Rios</option>
            </select>
          </div>
          <div id="area" class="left">
            <label for="area" name="area">Área de aplicação: *</label>
            <select name="area" id="area">
              <option value="ciencias-biologicas">Ciências Biológicas</option>
              <option value="ciencias-saude">Ciências da Saúde</option>
              <option value="ciencias-exatas">
                Ciências Exatas e da Terra
              </option>
              <option value="ciencias-humanas">Ciências Humanas</option>
              <option value="ciencias-sociais">
                Ciências Sociais Aplicadas
              </option>
              <option value="engenharias">Engenharias</option>
              <option value="interdisciplinar">Interdisciplinar</option>
              <option value="linguistica">Linguística, Letras e Artes</option>
            </select>
          </div>
          <div class="clear">&nbsp;</div>
          <div class="clear">&nbsp;</div>
          <div class="clear">&nbsp;</div>
          <div id="enviar" class="right">
            <a href="./certificado.php"></a>
            <button class="btn" style="width: 160px">
              Concluir
            </button>
            </a>
          </div>
          <div class="clear"></div>
        </form>
      </main>
      <?php include('../footer.php'); ?>
    </div>
  </body>
</html>
