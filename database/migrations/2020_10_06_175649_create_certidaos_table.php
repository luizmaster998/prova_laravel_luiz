<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertidaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certidaos', function (Blueprint $table) {
            $table->id();
            $table->string('tipocertidao');
            $table->string('envolvido1');
            $table->string('envolvido2');
            $table->string('data certidao');
            $table->string('nome tabeliao');
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
        Schema::dropIfExists('certidaos');
    }
}
