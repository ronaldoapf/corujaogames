<?php

    require_once('../model/Usuario.php');

    if($_SESSION['user']){
        
        $user = $_SESSION['user'];
        $a = json_decode($user);
        $cpf = $a->cpf;

        $buscarJogosCarrinho = new Usuario();

        $jogos = $buscarJogosCarrinho->buscarJogosCarrinho();

        print_r($jogos);
        
    }

?>