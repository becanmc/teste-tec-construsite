# Questão 2

- Arquivo-mãe: Questão 2/Questao-02.php

## Estrutura da pasta
Questão 2/

├─ Questao-02.php

└─ README.md

## Localização da resposta
- Questão A: Linha 43

## O que foi adicionado?
```javascript
$(".evento-click").on( "click", function(event) { // Escuta o envento de clicar no elemento
    event.preventDefault(); // Previne a nevegação de href
    var contentID = "#conteudo-" + $(this).attr("data-titulo"); // Pega o ID do conteúdo a ser mostrado
    $(contentID).show(); // Mostra o conteúdo
});
```

## Fontes:
1. [Stack Overflow](https://pt.stackoverflow.com/questions/282609/pegar-id-do-elemento-clicado)
2. [JQuery - Docs](https://jquery.com/)
