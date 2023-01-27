<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h3>Cadastro - Agência Futebol</h3>
    <form method="post" action="../control/controleUsuario.php">

      <div class="form-outline mb-4">
        <input type="email" name="email" id="email" class="form-control">
        <label class="form-label" for="email">Email</label>
      </div>

      <div class="form-outline mb-4">
        <input type="password" name="senha" id="senha" class="form-control">
        <label class="form-label" for="senha">Senha</label>
      </div>

      <button type="submit" name="opcao" value="Cadastrar" class="btn btn-primary btn-block mb-4">Cadastrar</button>
    </form>

    <div class="text-center">
      <p>Já tem Cadastro? <a href="paginaLogin.php">Fazer Login</a></p>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>