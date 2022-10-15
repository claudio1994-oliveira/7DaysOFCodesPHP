<?php

function crud_create(array $user)
{
    $usuarios = json_decode(file_get_contents(__DIR__ . '\\data\\users.json'));


    array_push($usuarios, $user);

    file_put_contents(__DIR__ . '\\data\\users.json', json_encode($usuarios));
}
