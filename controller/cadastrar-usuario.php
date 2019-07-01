<?php
    require_once("../model/Usuario.php");
    if($_POST){
        $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);

        echo $cpf;
        echo $email;
        echo $senha;
        echo $nome;
        
        $novoUsuario = new Usuario($cpf, $nome, $email, $senha);
        
        $resultado = $novoUsuario->verificaCadastro();

        if($resultado == 1) {
            
            $result = $novoUsuario->cadastrarUsuario();

            if($result == 1){
                echo '
                    <script type="text/javascript">
                        alert("Usuário cadastrado com sucesso!");
                        window.location="../view/cadastro.php";
                    </script>  
                ';
            }

            else{
                echo '
                    <script type="text/javascript">
                        alert("Não foi possível cadastrar o usuário");
                        window.location="../view/cadastro.php";
                    </script>  
                ';
            }
        }

        else {
            echo '
                <script type="text/javascript">
                    alert("Usuário já cadastrado no sistema.");
                    window.location="../view/cadastro.php";
                </script>  
            ';
        }
    }
?>