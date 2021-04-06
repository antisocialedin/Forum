<?php

use Illuminate\Database\Seeder;
use App\Usuario;

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
        ]);
    }
}
