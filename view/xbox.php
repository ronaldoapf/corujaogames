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

        <div class="content">
            <div class="container">
                <div class="row">
                    <script>
                        $(document).ready(function(){
                            $.ajax({
                                type: 'post',
                                url: '../controller/buscar-produtosXBOX.php', 
                                success: function(dados){
                                    var dadosJson = JSON.parse(dados);

                                    for(var i=0; i < dadosJson.length; i++){
                                        $('.row').append(
                                            '<div class="game-card">'+
                                                '<img src="/corujao/'+dadosJson[i].url_imagem+'" alt="game_thumb450x450">'+
                                                '<div class="title">'
                                                    +dadosJson[i].titulo+
                                                '</div>'+
                                                '<div class="price">'+
                                                    'R$' +dadosJson[i].preco+
                                                '</div>'+     
                                                '<button class="btn btn-sucess">Adicionar ao carrinho</button>'+                                         
                                            '</div>'
                                        );
                                    }
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </body>
</html>