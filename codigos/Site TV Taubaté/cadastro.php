<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h1>Cadastro Completo</h1>
                    <form action="">
                        <div class="form-group">
                            <label for="rg">RG:</label>
                            <input class="form-control" type="number" name="rg" id="rg" placeholder="Digite seu RG...">
                            <div id="rg" class="form-text">Somente números</div>
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input class="form-control" type="number" name="cpf" id="cpf" placeholder="Digite seu CPF...">
                            <div id="cpf" class="form-text">Somente números</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>