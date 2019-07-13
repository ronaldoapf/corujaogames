<?php
    require_once('../model/Usuario.php');
    session_start();

    // n ta entrando aq
    if(isset($_SESSION['user'])){
        
        $user = $_SESSION['user'];
        $a = json_decode($user);
        $cpf = $a->cpf;

        $buscarJogosCarrinho = new Usuario();
        $jogos = $buscarJogosCarrinho->buscarJogosCarrinho($cpf);
        echo json_encode($jogos);
        
    }

?>