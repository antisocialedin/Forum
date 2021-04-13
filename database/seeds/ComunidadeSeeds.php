<?php

use Illuminate\Database\Seeder;
use App\models\Comunidade;
use Carbon\Carbon;

class ComunidadeSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Comunidade $registro)
    {
        $registro->create([
            'titulo' => 'PIC Master',
            'sigla' => 'PIC-M',
            'codigo'  => '123',
            'data'  => Carbon::createFromFormat('d/m/Y', '05/04/2021')->format('Y-m-d'),
        ]);
    }
}
