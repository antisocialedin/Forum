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
