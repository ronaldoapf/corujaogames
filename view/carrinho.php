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
        <div class="container fafafa">

            <div class="custom-card">
                <div class="first-side">
                    <div class="image">
                        <img src="./6acaa755ef.jpg" alt="">
                    </div>
                    <div class="title">
                        Days Gone - PS4
                        <div class="price">
                            Valor unitário: R$ 199,99
                        </div>
                    </div>
                </div>
                <div class="ammount">
                    <div class="info">
                        <div class="q">
                            Quantidade: 5 <br>
                        </div>
                        <div class="subtotal">
                            Subtotal: R$ 999,95
                        </div>
                    </div>
                    <div class="icons">
                        <i class="fa fa-trash"></i>
                    </div>
                </div>
            </div>
            <div class="custom-card">
                <div class="first-side">
                    <div class="image">
                        <img src="./6acaa755ef.jpg" alt="">
                    </div>
                    <div class="title">
                        Days Gone - PS4
                        <div class="price">
                            Valor unitário: R$ 199,99
                        </div>
                    </div>
                </div>
                <div class="ammount">
                    <div class="info">
                        <div class="q">
                            Quantidade: 5 <br>
                        </div>
                        <div class="subtotal">
                            Subtotal: R$ 999,95
                        </div>
                    </div>
                    <div class="icons">
                        <i class="fa fa-trash"></i>
                    </div>
                </div>
            </div>
            <div class="total-value">
                Valor total: <br>
                <div class="cash">
                    R$ 1.999,90
                </div>
                em até 10x sem juros de R$ 199,99
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

</body>

</html>