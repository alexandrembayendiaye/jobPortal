<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulants', function (Blueprint $table) {
            $table->unsignedBigInteger('postulant_id_employe');
            $table->foreign('postulant_id_employe')->references('id')->on('employes'); 
            $table->unsignedBigInteger('postulant_id_job');
            $table->foreign('postulant_id_job')->references('id')->on('jobs'); 
            $table->integer('etat')->default(2);
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
        Schema::dropIfExists('postulants');
    }
};
