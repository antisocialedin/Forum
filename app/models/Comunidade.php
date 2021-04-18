<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Comunidade extends Model
{
    protected $table = 'comunidades';

    protected $fillable = [
        'titulo', 
        'sigla', 
        'descricao', 
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function topico()
    {
        return $this->hasMany('App\models\Topico', 'comunidade_id');
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
