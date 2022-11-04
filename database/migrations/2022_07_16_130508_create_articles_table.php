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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->String('nom')->default('1');
            $table->String('reference')->default('1');
            $table->String('marque')->default('1');
            $table->double('prixAchat')->default(1);
            $table->double('prixVente')->default(1);
            $table->double('total')->default(1);
            $table->double('totalHtva')->default(1);
            $table->String('emplacement')->default('1');
            $table->String('type')->default('1');
            $table->String('unite')->default('1');
            $table->String('designation')->default('1');
            $table->Integer('stockMin')->default(1);
            $table->Integer('stockInit')->default(1);
            $table->integer('niveauStock')->default(1);
            $table->boolean('vente')->default(false);
            $table->boolean('location')->default(false);
            $table->foreignId("fournisseur_id")->nullable()->constrained();
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
        Schema::dropIfExists('articles');
    }
};
