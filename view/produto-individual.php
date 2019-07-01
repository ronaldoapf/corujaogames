<?php
    session_start();
?>

<html>
    <head>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/all.min.css">

        <script src="../assets/js/jquery-3.4.0.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.js"></script>
        <script src="../assets/js/main.js"></script>
    </head>

    <body>

        <?php
            include '../partials/header1.php';
        ?>
        
        <div class="container">
            <div class="page-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="container-img">
                                <?php    
                                    if(!isset($_GET['game'])){
                                        Header('Location: index.php');
                                    }

                                    include_once('../model/Produto.php');
                                    
                                    
                                    $busca = new Produto();
                                    $game = $busca->buscarJogosById($_GET['game']);

                                    echo '<img src="../'.$game['url_imagem'].'">';
                                ?>
                            </div>
                        </div>

                        <div class="col-md-6" style="float: right">
                            <h4>IMPERDÍVEL</h4>
                            <?php
                                echo '
                                    <div class="card-body">
                                        <h5 class="card-title">'.$game['titulo'].'</h5>
                                        <p class="card-text" style="text-align: justify">'.$game['descricao'].'</p>
                                        <div class="price">R$ '.$game['preco'].'</div>
                                        <button class="btn btn-success">Adicionar ao carrinho</button>
                                    </div>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>