<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
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
    <div class="mb-4">
    <h1>Cadastro:</h1>
    <label class="form-label">Celular:</label>
    <input type="text" class="form-control" id="celular" required>
    
    <div class="form-text">Este será seu usuário.</div>
    </div>

    <div class="mb-3">
    <label class="form-label">Senha:</label>
    <input type="password" class="form-control" id="senha" minlength="8" required>
    </div>

    <div class="form-group text-center">
    <a class="btn btn-primary" href="cadastro.php">Enviar</a>
    <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>

    <div class="alert alert-danger d-none">
    Preencha o campo <span id="campo-erro"></span>!
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
    $("#celular").mask("(99)99999-9999");
  </script>
  </body>
</html>