<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
    protected $fillable = ['nome'];
    use HasFactory;

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
