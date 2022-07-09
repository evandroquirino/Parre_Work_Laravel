<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'nome',
        'costureira_id',
        'personalizacao_id',
        'tecido_id',
        'cliente_id',
        'etapa_id',
        'cor', 
        'detalhes'];
    use HasFactory;

    public function cliente()
    {
        return $this->hasOne(Cliente::class);
    }
    public function costureira()
    {
        return $this->hasOne(Costureira::class);
    }
    public function etapa()
    {
        return $this->hasOne(Etapa::class);
    }
    public function personalizacao()
    {
        return $this->hasOne(Personalizacao::class);
    }
    public function tecido()
    {
        return $this->hasOne(Tecido::class);
    }

}
