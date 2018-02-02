<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
     protected $fillable = [
        'placa', 'modelo', 'color','tipo','marca',
    ];
}
