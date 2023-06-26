#instalar Phinx
composer require robmorgan/phinx

#Mostar todos os comandos
vendor\bin\phinx

#inicio o phinx
vendor\bin\phinx init

#Criar Migrations
vendor\bin\phinx create <nomeDaMigrations>

#Execultar Migrations (Atualizar)
vendor\bin\phinx migrate

#Retornar Versão anterior do Banco de Dados
vendor\bin\phinx rollback 


<!-- Seeds -->
#Executar os Seeds (Obs: Todos os seeds são executados novamente)
vendor\bin\phinx seed:run

vendor\bin\phinx seed:create <nomeDoSeeds>
'Ex:' vendor\bin\phinx seed:create UserSeeder

<!--Teste Lucas-->
vendor\bin\phinx create CreateCategoriesTable (Criar Tabela Categoria produtos)
vendor\bin\phinx create CreateProductsTable
vendor\bin\phinx create AddTelefoneUsuario