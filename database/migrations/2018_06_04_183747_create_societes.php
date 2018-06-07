<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocietes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societes', function (Blueprint $table) {
            $table->increments('id_soc');
            $table->string('nom_soc_1');
            $table->string('nom_soc_2');
            $table->string('nom_soc_3');
            $table->string('enseigne_soc');
            $table->string('adress_soc');
            $table->string('ville_soc');
            $table->integer('code_postal_soc');
            $table->string('type_adress_soc');
            $table->string('activite_soc');
            $table->string('capitale_chiffre_soc');
            $table->float('capitale_lettre_soc');
            $table->integer('id_us')->unsigned();
            $table->foreign('id_us')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('societes');
    }
}
