<?php

    require_once("../model/Usuario.php");

    if($_POST){

        $email = filter_input(INPUT_POST, "email",FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);

        $loginUsuario = new Usuario("", "", $email, $senha);

        $result = $loginUsuario->logIn();

        if($result !== 'error'){
            session_start();
            $_SESSION['user'] = json_encode($result); 
            

            echo '
                <script type="text/javascript">
                    alert("Login efetuado com sucesso!");
                    window.location="../index.php";
                </script>  
            ';
        }

        else{
            echo '
                <script type="text/javascript">
                    alert("Email ou senha incorretos!");
                    window.location="../index.php";
                </script>  
            ';
            }
    }
?>