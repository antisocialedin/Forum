<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeeds::class);
        $this->call(ComunidadeSeeds::class);
        $this->call(TopicoSeeds::class);
        $this->call(AdmSeeds::class);
    }
}
