<?php

class Login {
    private $email;                         // Atributos privados só podem ser acessados dentro da própria classe.
    private $senha;

    public function getEmail() {            
        return $this->email;
    }

    public function setEmail($e) {                             
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);               // Modelo para filtragem de caracteres não aceitos em e-mails pelo PHP.
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($s) {
        $this->senha = $s;
    }

    public function Logar() {
        if($this->email == "teste@teste.com" and $this->senha = '123456'):
            echo "Logado com sucesso!";
        else:
            echo "Dados inválidos";
        endif;
    }
}

$logar = new Login();
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar->Logar();
echo "<br>";
echo "<br>";
echo $logar->getEmail();