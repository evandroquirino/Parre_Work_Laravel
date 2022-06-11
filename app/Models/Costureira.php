<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costureira extends Model
{
    protected $fillable = ['nome', 'telefone', 'endereco'];
    use HasFactory;

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
