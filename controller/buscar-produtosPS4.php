<?php

    require_once('../model/Produto.php');

    $buscaProdutos = new Produto();

    $games = $buscaProdutos->buscarJogosPS4();

    
    if(isset($games)) echo json_encode($games);
    

?>