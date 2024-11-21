<?php
require '../controller/UsuarioController.php';
require '../controller/autenticacao.php';

checkLogin();


use controller\UsuarioController;

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <script>
        function confirmacao(id) {
            let resposta = confirm("Deseja realmente excluir?");
            if (resposta) {
                window.location = "http://localhost/Web2/Loja_PHP/controller/UsuarioController.php?method=excluir&id=" + id;
            }
            return false;
        }
    </script>
</head>

<body>
    <?php
    include __DIR__ . '\menu.php';
    ?>
    <div class="container">
        <?php
        if (isset($_SESSION['msg'])) {
            ?>
            <div class="row">
                <div class="alert alert-danger" role="alert">
                    <?= $_SESSION['msg']; ?>
                </div>
            </div>
            <?php unset($_SESSION['msg']);
        } ?>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Senha</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $usuarioController = new UsuarioController();
                    $usuarios = $usuarioController->getTodos();
                    foreach ($usuarios as $usuario) {
                        ?>
                        <tr>
                            <td> <?= $usuario->getNome() ?> </td>
                            <td> <?= $usuario->getEmail() ?> </td>
                            <td > <?= $usuario->getSenha() ?> </td>
                            <td>
                                <a href="../controller/UsuarioController.php?method=iniciarEditar&id=<?= $usuario->getId() ?>"
                                    class="btn btn-warning btn-sm">Editar</a>
                            </td>
                            <td>
                                <a href="#" onclick="javascript:confirmacao(<?= $usuario->getId() ?>)"
                                    class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+SO3+7p1Hg00v3p8fDNRcSvA8Htv/"
        crossorigin="anonymous"></script>
</body>

</html>
