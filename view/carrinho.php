<?php
    session_start();
    if(!isset($_SESSION['user'])){
       echo '
       <script type="text/javascript">
            alert("É necessário fazer login para acessar o carrinho!");
            window.location="../index.php";
        </script> 
       ';
    }
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/all.min.css">
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/jquery-3.4.0.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <meta charset="utf-8">
    <title>Home</title>
</head>

<body>

    <?php
        include '../partials/header1.php';
    ?>

    <div class="container">
        <div class="games-container" style="padding-top: 20px;">
        </div>
    </div>
    <script>
        $(function(){
            $.ajax({
                type: 'POST',
                url: '../controller/buscar-produtos-carrinho.php',
                success: function (json){
                    var jogos = JSON.parse(json);
                    $('.games-container').empty();
                    html = '';
                    for(let j of jogos){ // isso quer dizer que a cada iteração, jogos[i] será chamado de j
                        var valorTotal = j.preco * j.quantidade;
                        html += `<div class="custom-card">
                            <div class="first-side">
                                <div class="image">
                                    <img src="../${j.url_imagem}" alt="">
                                </div>
                                <div class="title">
                                ${j.titulo}
                                    <div class="price">
                                    Valor unitário: R$ ${j.preco}
                                    </div>
                                </div>
                            </div>
                            <div class="ammount">
                                <div class="info">
                                    <div class="q">
                                     Quantidade: ${j.quantidade} <br>
                                    </div>
                                    <div class="subtotal">
                                     Subtotal: R$ ${j.preco * j.quantidade}
                                    </div>
                                </div>
                                <div class="icons">
                                <i class="fa fa-trash"></i>
                                </div>
                            </div>
                           
                        </div><br>`;
                    }

                    
                    $(".games-container").append(html);


                    console.log(html); 
                }
            });
        });

    </script>

    <?php
        include '../partials/footer.php';
    ?>
</body>

</html>