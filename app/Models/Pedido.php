<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['nome','costureira_id', 'cor', 'detalhes'];
    use HasFactory;

    public function costureira()
    {
        return $this->hasOne(Costureira::class);
    }
}
