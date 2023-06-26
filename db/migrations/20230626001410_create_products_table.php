<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateProductsTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('tb_produto');
        
        $table->addColumn('cat_codigo', 'integer');
        $table->addColumn('pro_codigo', 'integer');
        $table->addColumn('pro_name', 'string');
        $table->addColumn('pro_preco', 'double', ['precision' => 9, 'scale' => 2]);
        $table->addColumn('pro_created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP']);
        $table->addColumn('pro_updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP']);

        $table->addIndex(['pro_codigo'], ['unique' => true]);

        //Criar Foreign Key
        $table->addForeignKey('cat_codigo', 'tb_categoria', ['cat_codigo'], [
            'delete' => 'NO_ACTION',
            'update' => 'NO_ACTION',
            'constraint' => 'fk_tb_produto_tb_categoria'
        ]);

        $table->create();
    }
}
