<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Jogadores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="cadastrarJogador.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="mostrarJogador.php">Mostrar</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <?php
                    session_start();
                    if (isset($_SESSION['email'])) {
                        echo 'Bem-Vindo ', $_SESSION['email'];
                    } else {
                        header("Location: paginaLogin.php");
                    }
                    ?>
                    <a class="btn btn-light btn-sm" href="../control/controleUsuario.php?opcao=Sair">Sair</a>
                </span>
            </div>
        </div>
    </nav>
    <div class="container">
        <h3>Cadastrar Jogador</h3>
        <form method="post" action="../control/controleJogador.php">
            <div class="mb-3">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="mb-3">
                <label for="salario">Salário:</label>
                <input type="text" id="currency" class="form-control" step="0.01" name="salario" id="salario">
            </div>

            <button type="submit" class="btn btn-primary" name="opcao" value="Cadastrar">Cadastrar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="../js/jquery.maskMoney.min.js" type="text/javascript"></script>
    <script>
        $(function() {
            $('#currency').maskMoney({
                prefix: 'R$ ',
                allowNegative: true,
                thousands: '.',
                decimal: ',',
                affixesStay: true
            });
        })
    </script>
</body>

</html>