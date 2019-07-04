<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">

    <script src="assets/js/jquery-3.4.0.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/main.js"></script>

    <meta charset="utf-8">
    <title>Home</title>
</head>

<body>

    <?php
        include 'partials/header1.php';
    ?>

    <div class="content">
        <div class="container">
            <h4>
                Jogos novos
            </h4>
            
            <div class="row">
                <form method="POST" action="controller/adicionar-carrinho.php">
                    <script>
                        $(document).ready(function(){
                            $.ajax({
                                type: 'post',
                                url: 'controller/buscar-novos-produtos.php', 
                                success: function(dados){

                                    var dadosJson = JSON.parse(dados);

                                    for(var i=0; i < dadosJson.length; i++){
                                        $('.row').append(
                                            '<div class="game-card">'+
                                            '<a href="view/produto-individual.php?game='+dadosJson[i].id+'">'+
                                                '<img src="'+dadosJson[i].url_imagem+'" alt="game_thumb450x450">'+
                                                '<div class="title">'
                                                    +dadosJson[i].titulo+
                                                '</div>'+
                                                '<div class="price">'+
                                                    'R$' +dadosJson[i].preco+
                                                '</div>'+     
                                            '</a>'+
                                                '<button class="btn btn-sucess" type="submit">Adicionar ao carrinho</button>'+                                         
                                            '</div>'

                                        );
                                    }
                                }
                            });
                        });
                    </script>
                </form>
            </div>
        </div>
            
        </div>
    </div>
    
    <div class="footer-custom">
        <footer class="text-right footer-custom">
            Agradecimento Franquinho Gameplays
        </footer>
    </div>

    
    <!-- <script src="assets/js/font-awesome.js"></script> -->
    <script>
        // $(function(){
        //     $("#login-form").submit(function(ev){
        //         ev.preventDefault();
        //         var data = $(this).serializeArray();
        //         var login = data[0].value;
        //         var senha = data[1].value;
        //         $.ajax({
        //             type: "POST",
        //             url: "controller/iniciar-sessao.php",
        //             data: {
        //                 login: login,
        //                 senha: senha
        //             },
        //             success: function(ans){
        //                 console.log(ans);
        //             },
        //             error: function(err){
        //                 console.log(err);
        //             }
        //         });
        //     })
        // })
    </script>
</body>

</html>