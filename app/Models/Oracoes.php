<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oracoes extends Model
{
    protected $table = 'Oracoes';
    protected $fillable = [ 'nome', 'email', 'pquem', 'intencao', 'solicitacao', 'acept'];
    protected $dates = ['created_at', 'updated_at'];
}
