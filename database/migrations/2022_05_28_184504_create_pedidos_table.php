<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->foreignId('costureira_id')->constrained('costureiras');
            // $table->foreignId('personalizacao_id')->constrained('personalizacaos_id');
            // $table->foreignId('tecido_id')->constrained('tecidos');
            // $table->foreignId('cliente_id')->constrained('clientes');
            $table->string('cor', 50);
            $table->string('detalhes', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
