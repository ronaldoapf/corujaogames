<div class="container">
    <ul class="menu">
        <!--<li class="menu-item">
            <a href="index.php"></a>
        </li>-->

        <li class="menu-item">
            <?php
                $actual_link = "{$_SERVER['REQUEST_URI']}";
                if($actual_link == `/corujao/` || $actual_link == '/corujao/index.php'){
                    echo '
                        <a href="./index.php">Home</a>
                    ';
                } else {
                    echo '
                        <a href="../index.php">Home</a>        
                    ';
                }    
            ?>
        </li>

        <li class="menu-item dropdown">
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Produtos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">PS4</a>
                <a class="dropdown-item" href="#">Xbox</a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Todas as categorias</a>
            </div>
        </li>

        <li class="menu-item">
            <a href="view/carrinho.php"><i class="fas fa-shopping-cart"></i></a>
        </li>

        <li class="menu-item dropdown">
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"> 
                <i class="fas fa-user-circle"></i>
                <?php
                    $user = $_SESSION['user'];
                    $a = json_decode($user);
                    echo $a->nome;
                ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                    if($_SESSION['user']){
                        echo '
                            <a class="dropdown-item" href="#">PS4</a>
                            <a class="dropdown-item" href="#">Xbox</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Sair</a>
                        ';
                    }

                    else{
                        echo '
                            <form method="POST" action="controller/iniciar-sessao.php" id="login-form" class="px-4 py-3">
                                <div class="form-group">
                                    <label for="exampleDropdownFormEmail1">Email</label>
                                    <input type="email" class="form-control" name="email" id="exampleDropdownFormEmail1" placeholder="email@seuemail.com">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleDropdownFormPassword1">Senha</label>
                                    <input type="password" class="form-control" name="senha" id="exampleDropdownFormPassword1" placeholder="Senha">
                                </div>
                            
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="view/cadastro.php">Novo por aqui? Cadastre-se</a>
                            <a class="dropdown-item" href="#">Esqueceu a senha?</a>
                        
                        ';
                    }
                ?>
            </div>
        </li>

    </ul>
</div>
