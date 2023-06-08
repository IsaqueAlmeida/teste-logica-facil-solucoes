# Script de Consulta de Dados do Banco de Dados

Este é um código em PHP que realiza uma consulta em um banco de dados para obter informações de contratos. Ele utiliza a extensão MySQLi para se conectar ao banco de dados e executar a consulta.

## Pré-requisitos

Antes de executar o código, você precisa ter o seguinte ambiente configurado:

 - PHP instalado no seu sistema operacional.
 - Servidor web local (por exemplo, Apache) configurado e em execução.
 - Banco de dados configurado com as tabelas mencionadas no código.

## Configuração
Siga as etapas abaixo para configurar o código:

 1. Faça o download ou clone este repositório para o seu ambiente de desenvolvimento.

 2. Abra o arquivo script.php no seu editor de código favorito.

 3. Localize a seção onde está escrito "// Aqui você deve realizar a conexão com o banco de dados" e substitua esse comentário com o código de conexão adequado para o seu banco de dados. Certifique-se de fornecer as informações corretas de host, usuário, senha e nome do banco de dados.

 4. Salve o arquivo `teste-logica.php` após realizar as alterações.

## Executando o código
Para executar o código, siga as etapas abaixo:

 1. Inicie o servidor web local configurado anteriormente.

 2. Abra o terminal no diretório onde o arquivo script.php está localizado.

 3. Execute o seguinte comando no terminal para executar o script PHP: `php script.php`.

 4. Após executar o comando acima, o resultado da consulta será exibido no terminal. Se houver resultados, as informações dos contratos serão mostradas, caso contrário, será exibida a mensagem "Nenhum resultado encontrado.".

# Teste de Lógica - parte 2

## Cadastro de Contratos - Consulta SQL

Este código PHP realiza uma consulta SQL em um sistema de cadastro de contratos. A consulta retorna uma relação com os seguintes campos agrupados:

- Nome de cada banco
- Verba
- Data de inclusão do contrato mais antigo deste agrupamento
- Data de inclusão do contrato mais novo deste agrupamento
- Soma do valor dos contratos neste agrupamento

## Pré-requisitos

- PHP instalado
- Servidor web configurado
- Banco de dados configurado

## Configuração

1. Faça a conexão com o banco de dados:
   - Certifique-se de ter as informações de conexão corretas (host, usuário, senha, nome do banco de dados) e atualize o código no trecho em que é feita a conexão com o banco de dados (`$conexao`).
   - Substitua a variável `$conexao` pelo nome da sua conexão com o banco de dados.

## Executando a consulta

1. Abra o arquivo PHP em um editor de texto ou IDE de sua escolha.
2. Configure a conexão com o banco de dados (se necessário) conforme descrito na seção de configuração.
3. Salve o arquivo com a extensão `.php` (por exemplo, `consulta_contratos.php`).
4. Copie o arquivo PHP para o diretório do seu servidor web.
5. Abra um navegador da web e acesse o arquivo PHP no seu servidor local (por exemplo, `http://localhost/consulta_contratos.php`).

Os resultados da consulta SQL serão exibidos no navegador.

## Observações

- Certifique-se de ter as tabelas e campos corretamente definidos no seu banco de dados, conforme descrito no início do código.


