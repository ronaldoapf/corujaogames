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

    <div class="content">
        <div class="container">
            <div class="carrinho-title">
                <h5>Carrinho de compras</h5>
            </div>

            <div class="row">

                <div class="carrinho-produto col-12">
                    <div class="titulo-produto col-2">
                        <h5>Fifa 19</h5>
                    </div>
                    
                    <div class="img-produto col-2">
                        <img src="../assets/uploads/thumbs/Xbox/fifa19.jpg" alt="">
                    </div>

                    <div class="preco-produto col-8 d-flex">
                        <h5>159,99</h5>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>


    <?php
        include 'partials/footer.php';
    ?>

    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/jquery-3.4.0.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/main.js"></script>
    <!-- <script src="assets/js/font-awesome.js"></script> -->
    <script>
       $(document).ready(function(){
            $.ajax({
                type: 'post',
                url: '../controller/buscar-produtos-carrinho.php'
                success: function(dados){
                    var dadosJson = JSON.parse(dados);

                    for(var i=0; i < dadosJson.length; i++){
                        $('.row').append(
                            dadosJson[i].id_produto
                        );
                    }
                }
            });
       });
    </script>
</body>

</html>