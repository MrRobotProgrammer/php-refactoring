# php-refactoring
Rever os conceitos de refatoração e boas praticas com a linguagem PHP

- Utilizar servidor PHP    
    .   command - php -S localhost:3000
    .   Ex: http://localhost:3000/nome_do_projeto

- projeto extrair funcao
    .   url: http://localhost:3000/extrair_funcao
    . criando funções para refatoração do código

- projeto extrair_variavel
    .   url: http://localhost:3000/extrair_variavel/index.php?email=flavioanalistadesistema@gmail.com
    . criando variavel para cada valor inserido no ternário
    . substituindo ternário para if (objetivo - tornar código mais legivél)

- projeto incorporar_funcoes
    .   url: http://localhost:3000/incorporar_funcoes
    . eliminar funções redundantes e simplificar o resultado dos dados


Técnicas avançadas de composição
-   Quebrar uma variável temporária quando ela acumula muitas responsabilidades.
-   Remover atribuição à parâmetros utilizando uma variável local.
-   Refatorar substituindo um algoritmo ruim.