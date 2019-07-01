<?php

    require_once('../model/Produto.php');

    $buscaProdutos = new Produto();

    $games = $buscaProdutos->buscarJogosXBOX();

    
    if(isset($games)) echo json_encode($games);
    

?>