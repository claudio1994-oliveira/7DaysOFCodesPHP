# 7DaysOFCodesPHP

Desafio de codificação em PHP

O projeto simula uma demanda no mundo real, no qual existem tanto códigos lindos nas mais modernas arquiteturas quanto códigos legados com algumas (muitas) dívidas técnicas. Você conseguiria negociar a refatoração de um trecho de código no framework fictício ScubaPHP?

O desafio consiste, usando apenas código PHP e o framework que será disponibilizado, implementar as seguintes funcionalidades: login, cadastro, validação de email, recuperação de senha e refatorar o ScubaPHP para algo mais moderno.

### Temas abordadas no desafio:

- criptografia;
- envio de emails;
- sessão;
- protocolo HTTP;
- manipulação de arquivos;
- criptografia;

### Projeto inicial

Antes de mais nada, você precisa ter a ferramenta na sua máquina:

```
composer create-project davidmeth/scuba-php:0.0.1
```

```
cd scuba-php
```

E suba o servidor embutido do PHP:

```
php -S localhost:4242
```

### Desafio #01

A tarefa será criar os arquivos controller.php e view.php - você estará usando algo similar ao MVC. Esses dois novos arquivos farão o trabalho que hoje é feito por route.php.

Você criará as funções do_register(), do_login() e do_not_found() no arquivo controller.php. Já no arquivo view.php, você criará a função render_view($template).

No arquivo routes.php, em vez de carregar o template da resposta, você chamará a função de controller.php de acordo com o parâmetro GET ?page=value

Já o controller.php usará a função do arquivo view.php para renderizar o conteúdo da resposta.

#### Créditos - 7DaysOfCode Alura
