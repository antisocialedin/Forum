<?php

use Illuminate\Database\Seeder;
use App\models\Usuario;

class UsuarioSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Usuario $registro)
    {
        $registro->create([
            'nick' => 'vini-vini-vish',
            'email' => 'velocidade@hotmail.com',
            'selo'  => 'Expert em PIC',
            'senha' => '1234',
        ]);

        $registro->create([
            'nick' => 'beto_pera',
            'email' => 'betoincrivel@hotmail.com',
            'selo'  => 'Super-Arduino',
            'senha' => '1234',
        ]);
    }
}
