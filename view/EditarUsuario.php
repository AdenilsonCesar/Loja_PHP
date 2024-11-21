<?php
require '../controller/autenticacao.php';
require '../view/menu.php';
checkLogin();

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$usuario = $_SESSION['usuario'];
?>
<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Editar Usuário</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>


<body>

   <h1>Editar Usuário</h1>
   <form action="../controller/UsuarioController.php" method="POST">
      <input type="hidden" name="method" value="atualizar" />
      <input type="text" name="nome" value="<?= $usuario['nome'] ?>" class="form-control" />
      <input type="email" name="email" value="<?= $usuario['email'] ?>" class="form-control" />
      <input type="password" name="senha" value="<?= $usuario['senha'] ?>" class="form-control" />
      <input type="hidden" name="id" value="<?= $usuario['id'] ?>" />
      <div class="d-grid gap-2 col-6 mx-auto">
         <input type="submit" value="Editar" class="btn btn-primary" />
      </div>
   </form>
</body>

</html>
