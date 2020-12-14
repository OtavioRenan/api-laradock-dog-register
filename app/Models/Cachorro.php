<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cachorro extends Model
{
    protected $table = 'cachorros';

    protected $fillable = [
        'id', 'tipo', 'nascimento', 'nome', 'dono'
    ];

    public $timestamps = false;

    public function raca()
    {
        return $this->belongsTo('App\Models\Raca', 'tipo');
    }
}
