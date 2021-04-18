<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Topico extends Model
{
    protected $table='topicos';

    protected $fillable = [
        'titulo', 
        'conteudo', 
        'avaliacao', 
        'usuario_id', 
        'comunidade_id',
    ];

    public function usuario()
    {
        return $this->belongsTo('App\models\Usuario', 'usuario_id');
    }

    public function comunidade()
    {
        return $this->belongsTo('App\models\Comunidade', 'comunidade_id');
    }

    public function search($filter = null)
    {
        $results = $this->where(function ($query) use($filter) {
            if ($filter) {
                $query->where('titulo', 'LIKE', "%{$filter}%");
            }
        })->paginate();

        return $results;
    }
}
