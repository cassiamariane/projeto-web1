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
            <span>Entrar ></span>
            <div class="dropdown-content">
              <a href="../aluno/login.php">Sou aluno</a>
              <a href="../responsavel/login.php">Sou professor</a>
            </div>
          </li>
        </ul>
      </nav>
      <main class="login cadastro">
        <h1 id="titulo">Faça seu cadastro<br /></h1>
        <br />
        <form action="./index.php" method="get">
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
          <div id="tel" class="right">
            <label for="tel">Telefone: *</label>
            <input
              type="tel"
              id="tel"
              name="tel"
              placeholder="(21) 99999-9999"
            />
          </div>
          <div class="clear"></div>
          <div id="nasc" class="left">
            <label for="nasc">Data de nascimento: *</label>
            <input type="date" name="nasc" id="nasc" />
          </div>
          <div id="municipio" class="right">
            <label for="municipio">Municipio: *</label>
            <input
              type="text"
              name="municipio"
              id="municipio"
              placeholder="onde judas perdeu as botas"
            />
          </div>
          <div class="clear"></div>
          <div id="endereco" class="left">
            <label for="endereco">Endereço: *</label>
            <input
              type="text"
              name="endereco"
              id="endereco"
              placeholder="as botas"
            />
          </div>
          <div id="estado" class="right">
            <label for="estado">Estado: *</label><br />
            <select id="estado" name="estado">
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
            </select>
          </div>
          <div class="clear"></div>
          <div id="cep" class="left">
            <label for="cep">CEP: *</label>
            <input type="number" id="cep" name="cep" placeholder="_____-___" />
          </div>
          <div id="campus" class="right">
            <label for="campus">Câmpus de aplicação: *</label>
            <select id="campus" name="campus">
              <option value="seropedica">Seropédica (Sede)</option>
              <option value="nova-iguacu">Nova Iguaçu</option>
              <option value="tres-rios">Três Rios</option>
            </select>
          </div>
          <div class="clear"></div>
          <div id="area" class="right">
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
          <div id="nome-usuario" class="left">
            <label for="nome-usuario">Nome de usuário: *</label>
            <input
              type="text"
              name="nome-usuario"
              id="nome-usuario"
              placeholder="Ex: seunome"
            />
          </div>
          <div class="clear"></div>
          <div id="password" class="left">
            <label for="password">Senha: *</label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="**********"
            />
          </div>
          <div class="clear"></div>
          <div id="password2" class="left">
            <label for="password2">Confirme sua senha: *</label>
            <input
              type="password"
              id="password2"
              name="password2"
              placeholder="**********"
            />
          </div>
          <div id="termos" class="right">
            <textarea name="termos" id="termos" cols="30" rows="10" readonly>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vehicula libero at sem fermentum luctus. Lorem ipsum dolor sit amet, consectetur adipiscingelit. Vivamus vehicula libero at sem fermentum
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vehicula libero at sem fermentum </textarea
            >
            <div id="li">
              <input type="checkbox" id="concordo" />
              <span>Concordo que li e aceito os termos</span>
            </div>
          </div>

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
