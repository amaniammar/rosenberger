<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('article');
            $table->string('description');
            $table->string('ref_pa');
            $table->string('etape_de_travail');
            $table->string('operateur');
            $table->string('ope_prenom');
            $table->string('ope_nom');
            $table->string('heure_de_traval');

            $table->string('machine');
            $table->string('panne');
            $table->string('description_machine');
            $table->string('retard_alimentation_logique');
            $table->string('performance_sol');
            $table->string('quantité_produit');
            $table->string('faute1');
            $table->string('non_conforme1');
            $table->string('code_de_faute1');
            $table->string('faute2');
            $table->string('non_conforme2');
            $table->string('code_de_faute2');
            $table->string('faute3');
            $table->string('non_conforme3');
            $table->string('code_de_faute3');
            $table->string('taux_rebut');
            $table->string('productivité'); 
            $table->string('disponibilité_machine');
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
        Schema::dropIfExists('productions');
    }
}
