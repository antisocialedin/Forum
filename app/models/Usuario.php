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
