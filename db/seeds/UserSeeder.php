<?php

declare (strict_types=1);

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    public function run(): void
    {
        $data = [
           [ 
            'name' => 'Lucas Oliveira',
            'email' => 'lucasoliveira719@mail.com',
            'password' => password_hash('teste', PASSWORD_ARGON2I),
           ],
           [ 
            'name' => 'Ana',
            'email' => 'anaTeste@mail.com',
            'password' => password_hash('teste2', PASSWORD_ARGON2I),
           ]
        ];

        $users = $this->table('tb_usuario');
        $users->insert($data);
        $users->saveData();
    }
}
