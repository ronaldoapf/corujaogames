<?php

    $_SERVER['HTTP_REFERER'];
    require_once('../model/Usuario.php');

    session_start();

    if($_SESSION['user']){

        $user = $_SESSION['user'];
        $a = json_decode($user);
        
        $cpf = $a->cpf;
        $id = $_GET['game'];
        $quantidade = 1;
        $result = 0;
        
        $usuario = new Usuario();
        
        $result = $usuario->verificarCarrinho($cpf, $id);
        
        if($result == 0){
            
            $result = $usuario->cadastrarJogoCarrinho($cpf, $id, $quantidade);
            
            if($result != 'error'){
                echo '
                <script type="text/javascript"  >
                    alert("Produto inserido no carrinho com sucesso!");
                    window.location="'.$_SERVER['HTTP_REFERER'].'";
                </script>
                ';
            }
            
            else{
                echo '
                <script type="text/javascript">
                alert("Não foi possível inserir o produto no carrinho!");
                window.location="'.$_SERVER['HTTP_REFERER'].'";
                </script>
                ';
            }
        }

        else{
            echo'
                <script type="text/javascript">
                   alert("O produto já se encontra no carrinho. Será acrescentado uma unidade ao carrinho.");
                </script>
            ';
            
            $result = $usuario->atualizarCarrinho($cpf, $id, $quantidade);
            echo '
                <script type="text/javascript">
                    window.location="'.$_SERVER['HTTP_REFERER'].'";
                </script>
            ';
            
        }
        
        
    }

    else{
        echo '
            <script type="text/javascript"  >
                alert("É necessário estar logado para inserir produtos no carrinho.");
                window.location="'.$_SERVER['HTTP_REFERER'].'";
            </script>
        ';
    }
?>