<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Cadastrar Usuário</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
   <style>
      body {
         background-color: #f8f9fa;
      }
      .container {
         background-color: #ffffff;
         padding: 20px;
         border-radius: 10px;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      h1 {
         color: #007bff;
         text-align: center;
         margin-bottom: 20px;
      }
      input[type="submit"], button {
         background-color: #007bff;
         color: white;
         width: 100%;
      }
      input[type="submit"]:hover, button:hover {
         background-color: #0056b3;
      }
   </style>
</head>

<body>
<?php
    include __DIR__ . '\menu.php';
    ?>
   <div class="container mt-5">
      <h1>Cadastrar Usuário</h1>
      
      <?php
      if (isset($_SESSION['error']) && $_SESSION['error'] == true) {
         echo '<div class="alert alert-danger" role="alert">' . $_SESSION['msg'] . '</div>';
         unset($_SESSION['error']);
         unset($_SESSION['msg']);
      }
      ?>
      
      <form action="../controller/UsuarioController.php" method="POST">
         <input type="hidden" name="method" value="salvar" />
         
         <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required />
         </div>
         
         <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required />
         </div>
         
         <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required />
         </div>
         
         <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
         </div>
      </form>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+SO3+7p1Hg00v3p8fDNRcSvA8Htv/" crossorigin="anonymous"></script>
</body>

</html>
