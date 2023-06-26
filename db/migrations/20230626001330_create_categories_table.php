<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateCategoriesTable extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('tb_categoria');
        
        $table->addColumn('cat_codigo', 'integer');
        $table->addColumn('cat_name', 'string');
        $table->addColumn('cat_created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP']);
        $table->addColumn('cat_updated_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP']);

        $table->addIndex(['cat_codigo'], ['unique' => true]);

        $table->create();
    }
}
