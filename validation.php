<?php

function eUsuario($email): bool
{
    $usuarios = json_decode(file_get_contents(__DIR__ . '\\data\\users.json'));

    foreach ($usuarios as $usuario) {

        if ($usuario->person->email == $email) {
            return header('Location: ?page=register&error=email');
        }
    }
    return false;
}


function tamanhoSenha($senha)
{
    if (strlen($senha) < 10) {
        header('Location: ?page=register&error=senha-tamanho');
        die();
    }
    return;
}

function senhaIguais($senha, $confirmaSenha)
{
    if ($senha != $confirmaSenha) {
        header('Location: ?page=register&error=senha-iguais');
        die();
    }



    return;
}
