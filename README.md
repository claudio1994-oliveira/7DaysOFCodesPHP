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

### Desafio #02

No desafio de hoje, você criará o arquivo crud.php e a função crud_create($user) para salvar os dados enviados pelo usuário no formulário de registro.

Você não usará banco de dados. A função crud_create($user) deverá ler o conteúdo do arquivo /data/users.json, acrescentar um novo elemento ao array e atualizar o conteúdo do arquivo users.json.

Para a etapa da persistência, você poderá usar as funções file_get_contents, file_put_contents, json_encode e json_decode.

Quando chegar uma requisição POST do formulário de registro, você deverá chamar a função que salva os dados e redirecionar para a url /?page=login usando a função header(), se houver alguma informação no array $\_POST.

Quando chegar uma requisição GET à URL
/?page=register, a mesma do formulário de registro, você deverá mostrar o formulário presente no template ‘register’.

Esta responsabilidade pertence ao arquivo controller.php!

#### Créditos - 7DaysOfCode Alura
