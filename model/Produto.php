<?php

    require_once('Connection.php');

    class Produto{
        private $titulo;
        private $descricao;
        private $preco;
        private $url_imagem;
        private $genero_produto;
        private $plataforma;

        public function getTitulo(){
            return $this->titulo;
        }
    
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
    
        public function getDescricao(){
            return $this->descricao;
        }
    
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
    
        public function getPreco(){
            return $this->preco;
        }
    
        public function setPreco($preco){
            $this->preco = $preco;
        }
    
        public function getUrl_imagem(){
            return $this->url_imagem;
        }
    
        public function setUrl_imagem($url_imagem){
            $this->url_imagem = $url_imagem;
        }
    
        public function getGenero_produto(){
            return $this->genero_produto;
        }
    
        public function setGenero_produto($genero_produto){
        }
    
        public function getPlataforma(){
            return $this->plataforma;
        }
    
        public function setPlataforma($plataforma){
            $this->plataforma = $plataforma;
        }


        public function buscarJogosById($id){
            $conn = new Connection();
            
            try{
                $busca = $conn->getConn()->prepare(
                    "SELECT * FROM produto WHERE id = ?"
                );
                $busca->bindValue(1, $id);
                
                $busca->execute();
                $game = $busca->fetch();
                
                return $game;

            }catch(Exception $ex){
                return null;
            }
        }


        public function buscarJogosXBOX(){
            $conn = new Connection();

            $busca = $conn->getConn()->prepare(
                "SELECT * FROM produto WHERE plataforma = 'Xbox One'"
            );

            $busca->execute();
            $games = $busca->fetchAll();

            if($games) return $games; 

            else return 'error';

        }

        public function buscarJogosPS4(){
            $conn = new Connection();

            $busca = $conn->getConn()->prepare(
                "SELECT * FROM produto WHERE plataforma = 'PS4'"
            );

            $busca->execute();
            $games = $busca->fetchAll();

            if($games) return $games; 

            else return 'error';
        }

        public function buscarJogos(){
            $conn = new Connection();
            $games = [];

            try{
                $busca = $conn->getConn()->prepare(
                    "SELECT * from produto"
                );

                $busca->execute();

                $games = $busca->fetchAll();

                //while($g = $busca->fetch()){
                //    $games[] = $g;
                //}
                return $games;
            
            }   catch(Exception $ex) {
                return null;
            }
        }
    }
?>