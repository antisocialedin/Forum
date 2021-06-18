<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nick', 
        'email', 
        'selo', 
        'senha',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function topico()
    {
        return $this->hasMany('App\models\Topico', 'usuario_id');
    }

    public function search($filter = null)
    {
        $results = $this->where(function ($query) use($filter) {
            if ($filter) {
                $query->where('nick', 'LIKE', "%{$filter}%");
            }
        })->paginate();

        return $results;
    }

}
