<?php

//message, code, file, line.

class Newsletter {

    public function cadastrarEmail($email) {

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Este email é inválido", 121);

        else:
            echo "Email cadastrado com sucesso!";
        
        endif;

    }

}

$newsletter = new Newsletter();

try {
    $newsletter->cadastrarEmail("contato@");
}   catch(Exception $e) {
        echo "Mensagem: ".$e->getMessage()."<br></br>";
        echo "Código: ".$e->getCode()."<br></br>";
        echo "Linha: ".$e->getLine()."<br></br>";
        echo "Arquivo: ".$e->getFile()."<br></br>";

}