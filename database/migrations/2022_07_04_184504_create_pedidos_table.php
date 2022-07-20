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
            $table->string('nome', 100)->nullable();
            $table->foreignId('costureira_id')->constrained('costureiras');
            $table->foreignId('personalizacao_id')->constrained('personalizacaos');
            $table->foreignId('tecido_id')->constrained('tecidos');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('etapa_id')->constrained('etapas');
            $table->string('cor', 50)->nullable();
            $table->string('detalhes', 150)->nullable();
            $table->string('imagem',50)->nullable();
            $table->date('data_pedido')->nullable();
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
