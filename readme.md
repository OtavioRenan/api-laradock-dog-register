/*------------------- EXECUÇÃO A PARTIR DO DOCKER     ---------------------------*/

Informações sobre implementação do pojeto laradock-dog-register:

Copie o arquivo .env.example para .env na pasta raiz. Você pode digitar copy .env.example .env se estiver usando o comando Prompt Windows ou cp .env.example .env se estiver usando o terminal linux. O arquivo já esta configurado. Como não houve uma exigência dei preferência ao uso do banco MySQL.

Execute o comando para rodar o container:

## docker-compose up

É necessário instalar as dependecias do composer com o comando

## docker-compose exec app composer install

Gere o a chave do arquivo .env

## docker-compose exec app php artisan key:generate

Para criar as tabelas execute o comando

## docker-compose exec app php artisan migrate

/*------------------- EXECUÇÃO A PARTIR DO DOCKER     ---------------------------*/


/*------------------- EXECUÇÃO A PARTIR DO ARTISAN SERVE ---------------------------*/

Informações sobre implementação de um projeto laravel:

Apos a clonagem do projeto no repositório é necessário instalar as dependecias do composer com o comando

## composer install

Após a instalação das dependências é necessário configurar o arquivo .env onde encontra-se as configurações do banco de dados. Copie o arquivo .env.example para .env na pasta raiz. Você pode digitar copy .env.example .env se estiver usando o comando Prompt Windows ou cp .env.example .env se estiver usando o terminal linux. Abra o arquivo e configure o banco de dados. Como não houve uma exigência dei preferência ao uso do banco MySQL.

Para gerar uma nova chave, execute o comando

## php artisan key:generate

É necessário a criação de um banco, apos a criação faz-se necessário o registro dele no arquivo .env

## -- DB_CONNECTION=mysql
## -- DB_HOST=127.0.0.1
## -- DB_PORT=3306
## -- DB_DATABASE=nome_do_banco
## -- DB_USERNAME=usuario_do_banco
## -- DB_PASSWORD=senha_do_usuario

Para criar as tabelas execute o comando

## php artisan migrate

Para executar o projeto com o serve-laravel, execute o comando

## php artisan serve

/*------------------- EXECUÇÃO A PARTIR DO ARTISAN SERVE ---------------------------*/

LEMBRANDO QUE A TABELA CACHORRO RECEBE UMA FK DE RAÇA

CACHORRO->TIPO => ID FROM RAÇA

## -- Rotas API
##    - GET - /raca/ -
##    - GET - /raca/{id}
##    - POST - /raca/
##    - PUT - /raca/{id}
##    - DELETE /raca/{id}
 
## -- Rotas API
##    - GET - /cachorro/
##    - GET - /cachorro/{id}
##    - POST - /cachorro/
##   - PUT - /cachorro/{id}
##    - DELETE /cachorro/{id}
 
/*------------------- PARA O METODO POST OU PUT NO POSTMAN  ---------------------------*/
/*------------------- TABELA RAÇA  ---------------------------*/
## descricao:Americano
## slug:Pitibul
/*------------------- TABELA RAÇA  ---------------------------*/
/*------------------- TABELA CACHORRO  ---------------------------*/
## dono:Fulano de Tal
## nome:Bob
## tipo:1
## nascimento:2020-12-12
/*------------------- TABELA CACHORRO  ---------------------------*/
/*------------------- PARA O METODO POST OU PUT NO POSTMAN  ---------------------------*/