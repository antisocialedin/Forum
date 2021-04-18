<?php

use Illuminate\Database\Seeder;
use App\models\Topico;
use Carbon\Carbon;

class TopicoSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Topico $registro)
    {
        $registro->create([
            'titulo' => 'Como instalar o software Proteus no Linux',
            'conteudo' => 'Pessoal, sou novo no fórum e estou com um problema uso o software Isis Proteus para desenvolver circuitos eletronicos e também sou usuário do linux a algum tempo porém sempre emulei o Windows so para rodar alguns programas específicos.Mas vi na net exemplos do Proteus rodando no ubuntu que eu estou utilizando eu instalei o proteus no wine e a instalação deu certo o programa chega a abrir mas quando abre logo a tela no note fica toda preta. tentei olhar a configuração do vídeo mas não deu certo.
            Alguém sabe como resolver este problemas pois prefiro ficar totalmente no Ubuntu do que ficar o o XP numa maquina virtual dentro do Linux.
            Desde ja Obrigado.',
            'avaliacao'  => '3.4',
            'usuario_id' => '5',
            'comunidade_id' => '2',
        ]);
    }
}
