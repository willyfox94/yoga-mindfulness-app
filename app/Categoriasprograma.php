<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoriasprograma extends Model
{
    protected $primaryKey = 'Id';
    protected $fillable = [
        'nombre', 'updated_at', 'created_at',
    ];

    protected $table = 'categoriasprogramas';
}
