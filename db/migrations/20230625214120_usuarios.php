<?php
declare(strict_types=1);

use Phinx\Db\Action\AddForeignKey;
use Phinx\Migration\AbstractMigration;

final class Usuarios extends AbstractMigration
{
    public function change(): void
    {
        //Nome da Tabela
        $table = $this->table('testando.tb_usuario');

        //Colunas da Tabela
        $table->addColumn('usu_codigo', 'integer');
        $table->addColumn('usu_nome', 'string');
        $table->addColumn('usu_email', 'string');
        $table->addColumn('usu_password', 'string');
        $table->addColumn('usu_created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP']);
        $table->addColumn('usu_updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP']);

        //Definir que o campo é unico
        $table->addIndex(['usu_email'], ['unique' => true]);

        // Definir como PrimaryKey
        $table->changePrimaryKey('usu_codigo');

        //Criar a nova tabela
        $table->create();

        // Remover a coluna id
        $table->removeColumn('id');
    }
}
