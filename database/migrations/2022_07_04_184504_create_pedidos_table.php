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
            $table->string('camisetaPP')->nullable();
            $table->string('camisetaP')->nullable();
            $table->string('camisetaM')->nullable();
            $table->string('camisetaG')->nullable();
            $table->string('camisetaGG')->nullable();
            $table->string('camisetaXG')->nullable();
            $table->string('camisetaEXG')->nullable();
            $table->string('camisetaXGG')->nullable();
            $table->string('camisetaEXGG')->nullable();
            $table->string('babyPP')->nullable();
            $table->string('babyP')->nullable();
            $table->string('babyM')->nullable();
            $table->string('babyG')->nullable();
            $table->string('babyGG')->nullable();
            $table->string('babyXG')->nullable();
            $table->string('babyEXG')->nullable();
            $table->string('babyXGG')->nullable();
            $table->string('infantil02')->nullable();
            $table->string('infantil04')->nullable();
            $table->string('infantil06')->nullable();
            $table->string('infantil08')->nullable();
            $table->string('infantil10')->nullable();
            $table->string('infantil12')->nullable();
            $table->string('infantil14')->nullable();
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

