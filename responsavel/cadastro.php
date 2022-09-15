<!--

  Feito por:

  Cássia Mariane
  Caio Fernandes
  Daniel Vinicius
  
  Sistemas de Informação 2021.1 - UFRRJ
  
-->

<?php
session_start();
  require "valida_cadastro.php";
  include('header.php');
  ?>
      <main class="login cadastro">
        <h1 id="titulo">Faça seu cadastro<br /></h1>
        <br />
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
          <label for="nome">Nome completo: *</label>
          <input
            type="text"
            id="nome"
            name="nome"
            autofocus
            placeholder="Ex: João da Silva"
          />
          <div id="email" class="left">
            <label for="email">E-mail: *</label>
            <input
              type="text"
              id="email"
              name="email"
              placeholder="fulano@ufrrj.br"
            />
          </div>
          <div class="clear"></div>
          <div id="cpf" class="left">
            <label for="cpf">CPF: *</label>
            <input
              type="number"
              name="cpf"
              id="cpf"
              placeholder="999.999.999-99"
            />
          </div>
          <div id="ciape" class="right">
            <label for="ciape">CIAPE: *</label>
            <input
              type="text"
              name="ciape"
              id="ciape"
            />
          </div>
          <div id="perfil" class="left">
            <label for="perfil">Nome de usuário: *</label>
            <input
              type="text"
              name="perfil"
              id="perfil"
              placeholder="Ex: seunome"
            />
          </div>
          <div class="clear"></div>
          <div id="senha" class="left">
            <label for="senha">Senha: *</label>
            <input
              type="password"
              id="senha"
              name="senha"
              placeholder="**********"
            />
          </div>
          <div class="clear"></div>
          <div id="senha2" class="left">
            <label for="senha2">Confirme sua senha: *</label>
            <input
              type="password"
              id="senha2"
              name="senha2"
              placeholder="**********"
            />
          </div>
          <!-- <div id="termos" class="right">
            <textarea name="termos" id="termos" cols="30" rows="10" readonly>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vehicula libero at sem fermentum luctus. Lorem ipsum dolor sit amet, consectetur adipiscingelit. Vivamus vehicula libero at sem fermentum
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vehicula libero at sem fermentum </textarea
            >
            <div id="li">
              <input type="checkbox" id="concordo" />
              <span>Concordo que li e aceito os termos</span>
            </div>
          </div> -->

          <div class="clear"></div>
          <div id="enviar" class="right">
            <a href="./index.php">
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
