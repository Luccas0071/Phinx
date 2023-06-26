<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddTelefoneUsuario extends AbstractMigration
{

    public function change(): void
    {

        $tb_usuario = $this->table('tb_usuario');

        $tb_usuario->addColumn('usu_telefone', 'string', ['null' => true, 'after' => 'usu_password']);
        $tb_usuario->update();

    }
}

// final class AddTelefoneUsuario extends AbstractMigration
// {

//     public function up(): void
//     {
//         $this->execute(<<<SQL
//             ALTER TABLE tb_usuarios 
//             ADD COLUMN usu_telefone varchar(255) NOT NULL
//             SQL
//         );

//     }

//     public function down(): void
//     {

//         $this->execute(<<<SQL
//             ALTER TABLE tb_usuarios 
//             DROP COLUMN usu_telefone
//             SQL
//         );

//     }
// }
