<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylecadastro.css">
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    
    
    
</head>

<body>
    <header>
      
      <nav class="navbar navbar-expand-lg navbar-light">
      
          <img src="Bandeira_de_Taubaté.png" width="70" height="40" alt="" style="padding-left: 10px">     
          <a class="navbar-brand" style="padding-left: 5px">   
          RG Taubaté
          </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>
          
          <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Início</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Entrar </a>
              </li>
              
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Registrar</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="#">Eventos</a>
              </li>

              <li class="nav-item active">
                <a class="nav-link" href="#">Sobre Nós</a>
              </li>

              
            </ul>
          </div>

      </nav>
    <header>

    <div class="container">
    <div class="row">
    <div class="col-6">
    <div class="card">
    <div class="card-body">

    <form >
    <div class="mb-3">
    <h1>Cadastro Completo:</h1>
    <label class="form-label">Nome Completo:</label>
    <input type="text" class="form-control" id="nome" required>
    </div>

    <div class="mb-3">
    <label class="form-label">E-mail:</label>
    <input type="text" class="form-control" id="email">
    </div>

    <div class="mb-3">
    <label class="form-label">Telefone:</label>
    <input type="text" class="form-control" id="telefone">
    </div>

    <div class="mb-3">
    <label class="form-label">RG:</label>
    <input type="text" class="form-control" id="rg">
    </div>

    <div class="mb-3">
    <label class="form-label">CPF:</label>
    <input type="text" class="form-control" id="cpf">
    </div>

    <div class="mb-3">
    <label for="cep" class="form-label">CEP:</label>
		<input id="cep" type="text" class="form-control" required/>
    </div>

    <div class="mb-3">
    <label for="endereco" class="form-label">Endereço:</label>
		<input id="endereco" type="text" class="form-control" required/>
    </div>

    <div class="mb-3">
    <label for="numero" class="form-label">Número:</label>
		<input id="numero" type="text" class="form-control" required/>
    </div>

    <div class="mb-3">
    <label for="complemento" class="form-label">Complemento:</label>
		<input id="complemento" type="text" class="form-control"/>
    </div>

    <div class="mb-3">
    <label for="bairro" class="form-label">Bairro:</label>
		<input id="bairro" type="text" class="form-control" required/>
    </div>

    <div class="mb-3">
    <label for="cidade" class="form-label">Cidade:</label>
		<input id="cidade" type="text" class="form-control" required/>
    </div>

    <div class="mb-3">
    <label for="estado" class="form-label">Estado:</label>
		<select id="estado" class="form-control">
      <option value="">Selecione uma opção...</option>
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

    <div class="form-group text-center">
    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>
    

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

<!-- Máscara celular-->
<script>
    
    $("#telefone").mask("(99) 9999-9999"); 

    $("#rg").mask("99.999.999-9");

    $("#cpf").mask("999999999/99");

</script>
</body>
</html>