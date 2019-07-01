<?php
    require_once('Connection.php');

    class Usuario{
        private $cpf;
        private $nome;
        private $email;
        private $senha;
        private $endereco;

        public function __construct($cpf="", $nome="", $email="", $senha="", $endereco=""){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            $this->endereco = $endereco;
        }

        public function getNome(){
            return $this->nome;
        }
    
        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getCpf(){
            return $this->cpf;
        }
    
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
    
        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail($email){
            $this->email = $email;
        }
    
        public function getEndereco(){
            return $this->endereco;
        }
    
        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        // Função para usuário iniciar sessão
        public function logIn(){
            $conn = new Connection();

            $logIn = $conn->getConn()->prepare(
                "SELECT * FROM usuario WHERE email = ? AND senha = MD5(?)"
            );

            $logIn->bindValue(1, $this->email);
            $logIn->bindValue(2, $this->senha);
            
            $logIn->execute();            
            
            if($row = $logIn->fetch()){
                return $row;
            } 
            
            else{
                return 'error';
            }
        }

        // Função para verificar se o usuário já é cadastrado no sistema
        public function verificaCadastro(){
            $conn = new Connection();

            $busca = $conn->getConn()->prepare(
                "SELECT cpf, email, senha FROM usuario WHERE cpf = ?"
            );

            $busca->bindValue(1, $this->cpf);
            return $busca->execute();
        }

        // Função para cadastar o usuário
        public function cadastrarUsuario(){
            $conn = new Connection();

            $insert = $conn->getConn()->prepare(
                "INSERT INTO usuario (cpf, nome, email, senha) values (:cpf, :nome, :email, MD5(:senha))"
            );

            $insert->bindParam(':cpf', $this->cpf);
            $insert->bindParam(':nome', $this->nome);
            $insert->bindParam(':email', $this->email);
            $insert->bindParam(':senha', $this->senha);
            
            //->execute() retorna true ou false
            return $insert->execute();
            
        }
    }
?>