# Questão 3

- Arquivo-mãe: Questão 3/index.php

## Estrutura da pasta
Questão 3/

├── components

│   └── logo-construsite-brasil.svg

├── controller/

│   └── send-email.php

├── style/

│   └── style.css

├── vendor/

│   ├── composer/

│   └── phpmailer/

├─ composer.json

├─ composer.lock

├─ index.php

└─ README.md

A pasta é dividida em **4 diretórios**, sendo eles:
1. `components`: Armazena componentes básicos para Front-End, nesse caso, a logo da Construsite.
2. `controller`: Arazena o controlador do formulário localizado no aquivo principal `index.php`.
3. `style`: Armazena o CSS do arquivo principal `index.php`.
4. `vendor`: Armazena códigos obrigatórios relacionados ao `composer` e ao `phpmailer`.


## Entendendo o código
O arquivo principal `index.php` coleta as informações dos inputs que o usuário inseriu no formulário. Antes dessas informações serem enviadas à `controller`, ocorre uma validação do JQuery, que garante que todos os inputs foram preenchidos. Após a validação, os dados inseridos são enviados à controller `send-email.php`, que capta as informações via POST e as integram ao PHPMailer, enviando assim o email ao próprio usuário.

## Fontes:
1. [GitHub - PHPMailer](https://github.com/PHPMailer/PHPMailer)
2. [GitHub - Iris](https://github.com/becanmccotemig/iris)
