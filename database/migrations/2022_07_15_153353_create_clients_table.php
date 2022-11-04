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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->text('nom');
            $table->text('nTVA');
            $table->text('email');
            $table->text('emailFact');
            $table->text('emailSs');
            $table->text('adresse');
            $table->text('adresseSS');
            $table->text('tele');
            $table->text('observation');
            $table->text('siteInternet');

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
        Schema::dropIfExists('clients');
    }
};
