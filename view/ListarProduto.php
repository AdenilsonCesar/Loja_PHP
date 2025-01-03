<?php
require '../controller/ProdutoController.php';

use controller\ProdutoController;
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Listar Produto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script>
    function confirmacao(codigo) {
      let resposta = confirm("Deseja realmente excluir?");
      if (resposta) {
        window.location = "http://localhost/LOJA_PHP/controller/ProdutoController.php?method=excluir&codigo=" + codigo;
      }
      return false;
    }
  </script>
</head>

<body>
  <?php
  include __DIR__ . '\menu.php';
  ?>
  <div class="container mt-5">
    <?php
    
    if (isset($_SESSION['msg'])) {
      ?>
      <div class="row">
        <a class="alert alert-danger" role="alert">
          <?= $_SESSION['msg']; ?>
        </a>
      </div>
    <?php } ?>
    <div class="row justify-content-center">
      <div class="col-10">
        <table class="table table-bordered table-striped text-center">
          <thead class="table-primary">
            <tr>
              <th>Nome</th>
              <th>Categoria</th>
              <th>Preço</th>
              <th>Imagem</th>
              <th colspan="2">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $produtoController = new ProdutoController();
            $produtos = $produtoController->getTodos();
            foreach ($produtos as $produto) {
              ?>
              <tr>
                <td><?= $produto->getNome() ?></td>
                <td><?= $produto->getCategoria() ?></td>
                <td><?= $produto->getPreco() ?></td>
                <td>
                  <img src="../<?= $produto->getImagem() ?>" alt="Imagem do Produto" width="100" height="100">
                </td>
                <td>
                  <a href="../controller/ProdutoController.php?method=iniciarEditar&codigo=<?= $produto->getCodigo() ?>" class="btn btn-warning btn-sm">
                    Editar
                  </a>
                </td>
                <td>
                  <a href="../controller/ProdutoController.php?method=excluir&codigo=<?= $produto->getCodigo() ?>"
                     onclick="javascript:confirmacao(<?= $produto->getCodigo() ?>)" class="btn btn-danger btn-sm">
                    Excluir
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
