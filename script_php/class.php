
<?php

class Envio{
    private $nome;
    private $email;
    private $telefone;
    private $assunto;
    private $msg;
    private $usuario;
    private $senha;
    
    //getando
    
    public function getNome(){  
        return $this->nome;
    }	
    public function getEmail(){ 
        return $this->email; 
    }
    public function getTelefone(){ 
        return $this->telefone; 
    }
    public function getAssunto(){ 
        return $this->assunto; 
    }
    public function getMsg(){ 
        return $this->msg; 
    }
    public function getUsuario(){ 
        return $this->usuario; 
    }
    public function getSenha(){ 
        return $this->senha; 
    }

    //setar
    public function setNome($nome){
        $this->nome=$nome; 			
    }
    public function setEmail($email){
        $this->email=$email;			
    }
    public function setTelefone($telefone){
        $this->telefone=$telefone;			
    }
    public function setAssunto($assunto){
        $this->assunto=$assunto;			
    }
    public function setMsg($msg){
        $this->msg=$msg;			
    }
    public function setUsuario($usuario){
        $this->usuario=$usuario;			
    }
    public function setSenha($senha){
        $this->senha=$senha; 
    }
        
    
}

?>