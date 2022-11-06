<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 100);
            $table->string('stazione_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno', 10)->unique();
            $table->tinyInteger('numero_carrozze')->unsigned()->default(1);
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            /*
            Azienda
            Stazione di partenza stringa
            Stazione di arrivo stringa
            Orario di partenza data
            Orario di arrivo data
            Codice Treno stringa
            Numero Carrozze intero
            In orario booleano
            Cancellato booleano
            */
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
        Schema::dropIfExists('trains');
    }
}
