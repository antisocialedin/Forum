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
            'nick' => 'rafa_gamaa',
            'email' => 'rafaela_gamao@gmail.com',
            'selo'  => 'Expert em PIC',
            'senha' => '1234',
        ]);

        $registro->create([
            'nick' => 'beto_pera_234',
            'email' => 'incrivel_pic@yahoo.com',
            'selo'  => 'Super-Arduino',
            'senha' => '1234',
        ]);

        $registro->create([
            'nick' => 'vini-master',
            'email' => 'velo@hotmail.com',
            'selo'  => 'Expert em PIC',
            'senha' => '1234',
        ]);

        $registro->create([
            'nick' => 'beto_pereira',
            'email' => 'beto@hotmail.com',
            'selo'  => 'Super-Arduino',
            'senha' => '1234',
        ]);

        $registro->create([
            'nick' => 'teste',
            'email' => 'velocidad5e@hotmail.com',
            'selo'  => 'Expert em PIC',
            'senha' => '1234',
        ]);

        $registro->create([
            'nick' => 'joao_p',
            'email' => 'betoincrivel6@hotmail.com',
            'selo'  => 'Super-Arduino',
            'senha' => '1234',
        ]);

        $registro->create([
            'nick' => 'EpicXD',
            'email' => 'velocidade7@hotmail.com',
            'selo'  => 'Expert em PIC',
            'senha' => '1234',
        ]);

        $registro->create([
            'nick' => 'hylander',
            'email' => 'betoincrivel8@hotmail.com',
            'selo'  => 'Super-Arduino',
            'senha' => '1234',
        ]);

        $registro->create([
            'nick' => 'carlos_213',
            'email' => 'velocidade9@hotmail.com',
            'selo'  => 'Expert em PIC',
            'senha' => '1234',
        ]);

        $registro->create([
            'nick' => 'mr.robot',
            'email' => 'betoincrivel10@hotmail.com',
            'selo'  => 'Super-Arduino',
            'senha' => '1234',
        ]);

        $registro->create([
            'nick' => 'eliot.robot',
            'email' => 'velocidade11@hotmail.com',
            'selo'  => 'Expert em PIC',
            'senha' => '1234',
        ]);

        $registro->create([
            'nick' => 'bruno_sena',
            'email' => 'betoincrivel12@hotmail.com',
            'selo'  => 'Super-Arduino',
            'senha' => '1234',
        ]);
        $registro->create([
            'nick' => 'fernanda_456',
            'email' => 'velocidade13@hotmail.com',
            'selo'  => 'Expert em PIC',
            'senha' => '1234',
        ]);

        $registro->create([
            'nick' => 'edin_travazap',
            'email' => 'betoincrivel14@hotmail.com',
            'selo'  => 'Super-Arduino',
            'senha' => '1234',
        ]);
    }
}
