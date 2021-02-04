<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->date('dataDeNascimento');
            $table->char('sexo', 1);
            $table->char('cep', 8)->nullable()->default(NULL);
            $table->string('endereco')->nullable()->default(NULL);
            $table->bigInteger('numero')->nullable()->default(NULL);
            $table->string('complemento')->nullable()->default(NULL);
            $table->string('bairro')->nullable()->default(NULL);
            $table->string('estado')->nullable()->default(NULL);
            $table->string('cidade')->nullable()->default(NULL);
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
        Schema::dropIfExists('clientes');
    }
}
