<?php

function crud_create(array $user)
{
    $usuarios = json_decode(file_get_contents(__DIR__ . '\\data\\users.json'));


    if (eUsuario($user['person']['email']) != false) {
        return eUsuario($user['person']['email']);
    }

    var_dump($user['person']['password'], $user['person']['password-confirm']);


    tamanhoSenha($user['person']['password']);
    senhaIguais($user['person']['password'], $user['person']['password-confirm']);

    array_push($usuarios, $user);

    file_put_contents(__DIR__ . '\\data\\users.json', json_encode($usuarios));

    return true;
}
