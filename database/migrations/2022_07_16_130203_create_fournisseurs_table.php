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
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->text('tele');
            $table->text('nom');
            $table->text('email');
            $table->double('tauxTva');
            $table->text('code');
            $table->text('remarque');
            $table->text('adresse');
            $table->text('teleSecd');
            $table->integer('numTva');
            $table->boolean('estActif');
            $table->text('notreFour');
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
        Schema::dropIfExists('fournisseurs');
    }
};
