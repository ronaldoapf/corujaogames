<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/all.min.css">


    <meta charset="utf-8">
    <title>Home</title>
</head>

<body>
    
    <?php
        include '../partials/header1.php';
    ?>

    <br>    

    <div class="container d-flex justify-content-center align-items-center">
        <div class="form-cad">
            <span class="title">
                <h3>Dados Cadastrais</h3>
                <small>Todos os campos são de preenchimento obrigatório.</small>
            </span>
            <form method="POST" action="../controller/cadastrar-usuario.php">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome:</label>
                            <input type="text" class="form-control" name="nome">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email:</label>
                            <input class="form-control" type="email" name="email">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Senha:</label>
                            <input class="form-control" type="password" id="senha" name="senha">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Confirmar senha:</label>
                            <input type="password" class="form-control" id="confirma-senha" name="confirma-senha">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>CPF:</label>
                            <input type="text" class="form-control mask-cpf" name="cpf">
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/jquery-3.4.0.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/jquery-mask-plugin.js"></script>
</body>

</html>