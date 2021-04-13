<?php

use Illuminate\Database\Seeder;
use App\models\Adm;

class AdmSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Adm $registro)
    {
        $registro->create([
            'nick' => 'costela',
        ]);
    }
}
