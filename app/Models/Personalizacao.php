<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personalizacao extends Model
{
    protected $fillable = ['nome', 'responsavel', 'telefone'];
    use HasFactory;

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}


