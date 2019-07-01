<?php

    require_once('../model/Produto.php');

    $novoJogo = new Produto();


    $games = $novoJogo->buscarJogos();

    if(isset($games)){
        $games = array_reverse($games);
        $games = array_slice($games, 0, 4);

        echo json_encode($games); 
    }

?>