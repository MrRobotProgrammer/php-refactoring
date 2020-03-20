<?php declare(strict_types=1);

function verificaSeEmailEhValido(): string
{
    $email = $_GET['email'];
    $mensagem = "O seu e-mail é: " . $_GET['email'] ;
    $mensagemError = "O seu e-mail não é válido";

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

        return $mensagem;
    }else{
        
        return $mensagemError;
    }
}

echo verificaSeEmailEhValido();
