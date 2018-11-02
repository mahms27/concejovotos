<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nombrevotos extends Model
{
    public $timestamps = false;
    protected $table = 'nombre_votos';
    protected $primaryKey='id';
}
