<?php

use Illuminate\Database\Seeder;
use App\models\Comunidade;
use Carbon\Carbon;

class ComunidadeSeeds extends Seeder
{
    public function run(Comunidade $registro)
    {
        $registro->create([
            'titulo' => 'PIC Master',
            'sigla' => 'PIC',
            'descricao'  => 'Comunidade dedicada a programação de PIC',
        ]);

        $registro->create([
            'titulo' => 'Arduino Maker',
            'sigla' => 'AR-M',
            'descricao'  => 'Comunidade dedicada a programação de Arduino',
        ]);
    }
}
