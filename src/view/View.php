<?php

namespace App\View;

class View
{
    public function render_view(string $template)
    {

        $content =  file_get_contents(getcwd() . '\\view\\' . $template . '.view');

        if ($_GET['from'] == "register") {
            $content = str_replace("Mensagem de Sucesso", "Usuário registrado com sucesso! Por favor, confirme o seu e-mail", $content);
        } else {
            $content = str_replace("Mensagem de Sucesso", "", $content);
        }

        if ($_GET['error'] == "email") {
            $content = str_replace("Mensagem de Erro Email", "Usuário já cadastrado", $content);
        } else {
            $content = str_replace("Mensagem de Erro Email", "", $content);
        }

        if ($_GET['error'] == "senha-tamanho") {
            $content = str_replace("Mensagem de Erro Senha", "A Senha precisa ter no mínimo 10 caracteres", $content);
        } else {
            $content = str_replace("Mensagem de Erro Senha", "", $content);
        }

        if ($_GET['error'] == "senha-iguais") {
            $content = str_replace("Mensagem-de-Erro-Senha-Iguais", "As Senhas não conferem!", $content);
        } else {
            $content = str_replace("Mensagem-de-Erro-Senha-Iguais", "", $content);
        }


        return $content;
    }
}
