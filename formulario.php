<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
  <h2 class="mb-4">Formulário</h2>
  <form action="recupera-dados.php" method="post">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" placeholder="Digite seu email">
    </div>
    <div class="form-group">
      <label for="mensagem">Idade:</label>
      <input type="text" name="idade" class="form-control" placeholder="Digite sua idade">
    </div>
    <div class="form-group">
      <label for="mensagem">Hobbie:</label>
      <input type="text" name="hobbie" class="form-control" placeholder="Digite seu hobbie">
    </div>
    <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
  </form>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
