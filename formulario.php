<!DOCTYPE html>
<html lang="en">
<head>
  <title>Criptografia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cadastrar</h2>
  <form action="cadUsuario.php" method="POST">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="nome" class="form-control" id="nome" placeholder="Digite seu nome" name="nome">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" name="email">
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="senha" class="form-control" id="senha" placeholder="Digite sua Senha" name="senha">
    </div>
    
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

</body>
</html>
