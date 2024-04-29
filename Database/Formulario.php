<?php

  if(isset($_POST['submit']))
  {

    include_once('confirmysql.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tipo_de_pele = $_POST['tipo_de_pele'];
    $rotinas_cuidados = $_POST['rotinas_cuidados'];
    $alergia = $_POST['alergia'];
    $alergia_informe = $_POST['alergia_informe'];
    $protetor_solar = $_POST['protetor_solar'];
    $melasma_familia = $_POST['melasma_familia'];
    $contraindicacao = $_POST['contraindicacao'];

    $result = mysqli_query($conexao, "INSERT INTO usuario(nome, email, tipo_de_pele, rotinas_cuidados, alergia, alergia_informe, protetor_solar, 
    melasma_familia, contraindicacao) VALUES ($nome, $email, $tipo_de_pele, $rotinas_cuidados, $alergia, $alergia_informe, $protetor_solar,
    $melasma_familia, $contraindicacao)");
  }

?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOS Skin Care - Formulário</title>
  <link rel="icon" href="logos/logohd.png">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <header>
    <h1 align="center">
      <a href="Início.html"><img width="80px" height="30px" src="logos/logohc.png"></a>SKIN CARE<br>
      <font size="4" color="brown">SOLUÇÕES PARA A SUA PELE</font>
      <nav>
        <ul>
          <li><a href="Início.html">INÍCIO</a></li>
          <li><a href="Categorias.html">PRODUTOS</a></li>
          <li><a href="Sobre.html">SOBRE</a></li>
        </ul>
      </nav>
    </h1>
  </header>

      <section id="formulario">
      <form class="form-group" action="formulario.php" method="POST">

      <fieldset class="group">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <div>
            <input type="text" name="nome" id="nome" size="30" required>
          </div>
        </div>

        <div class="form-group">
          <label for="email">E-mail:</label>
        <div>
          <input type="email" name="email" id="email" size="30" required 
          pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|com\.br)"
          oninvalid="setCustomValidity('Por favor, insira um endereço de e-mail válido.')"
          oninput="setCustomValidity('')">
        </div>
      </div>
    </fieldset>

    <fieldset class="group">
      <div class="form-pele">
        <label for="tipo_de_pele">Qual o seu tipo de pele?</label><br>
        <select name="tipo_de_pele" id="tipo_de_pele" required>
          <option disabled selected hidden>Selecione</option>
          <option value="o">Oleosa</option>
          <option value="s">Seca</option>
          <option value="m">Mista</option>
          <option value="a">Acneica</option>
        </select>
      </div>

      <div class="form-pele">
        <label for="rotinas_cuidados">Tem rotinas de cuidados com a pele?</label>
        <div>
          <label><input type="radio" name="rotinas_cuidados" id="rotinas_cuidados" value="sim" required> 
            Sim</label>
          <label><input type="radio" name="rotinas_cuidados" id="rotinas_cuidados" value="nao" required> 
            Não</label>
        </div>
      </div>
    </fieldset>

    <fieldset class="group">
      <div class="form-alergia">
        <label for="alergia">Possui alguma alergia?</label>
        <div>
          <label><input type="radio" name="alergia" id="alergia" value="sim" required>
             Sim</label>
          <label><input type="radio" name="alergia" id="alergia" value="nao" required>
             Não</label>
        </div>
      </div>
    
      <div class="form-alergia">
        <label for="alergia_informe">(Caso sim, informe a alergia):</label>
        <div>
          <input type="text" name="alergia_informe" id="alergia_informe" size="30">
        </div>
      </div>
    </fieldset>

    <fieldset class="group">
      <div class="form-melasma">
        <label for="protetor_solar">Você usa protetor solar?</label>
        <div>
          <label><input type="radio" name="protetor_solar" id="protetor_solar" value="sim" required>
             Sim</label>
          <label><input type="radio" name="protetor_solar" id="protetor_solar" value="nao" required>
             Não</label>
        </div>
      </div>

      <div class="form-melasma">
        <label for="melasma_familia">Tem casos de melasma na família?</label>
        <div>
          <label><input type="radio" name="melasma_familia" id="melasma_familia" value="sim" required>
             Sim</label>
          <label><input type="radio" name="melasma_familia" id="melasma_familia" value="nao" required>
             Não</label>
        </div>
      </div>
    </fieldset>

    <fieldset class="form-textarea">
      <div class="form-group">
        <label for="contra_indicacao">Possui alguma contraindicação?</label>
      </div>

      <div>
        <textarea name="contraindicacao" id="contraindicacao" rows="6" cols="40" 
        class="no-resize" required></textarea>
      </div>

      <div class="form-group">
        <button class="botao" type="reset" name="reset">Limpar</button>
        <button class="botao" type="submit" name="submit" id="submit">Enviar</button>
      </div>
    </fieldset>

    </div>
    </form>
    </section>

  <footer>
    <p>&copy; 2024 SOS SKIN CARE</p>
  </footer>
</body>

</html>