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
          <img src="Bandeira_de_Taubaté.png" width="57" height="40" alt="">     
          <a class="navbar-brand" >   
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

    <form id="form-cadastro">
    <div class="mb-3">
    <h1>Cadastro Completo:</h1>
    <label class="form-label">Nome Completo:</label>
    <input type="text" class="form-control" id="nome" required>
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