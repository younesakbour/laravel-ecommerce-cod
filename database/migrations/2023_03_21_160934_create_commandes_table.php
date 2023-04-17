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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->enum('status', ['review', 'progress', 'confirmed'])->default('review');
            $table->string("phone"); 
            $table->string('email');
            $table->string('adresse');
            $table->string('country');
            $table->string('city');
            $table->string('zip_code');
            $table->boolean('is_valid')->default(0);
            // $table->unsignedBigInteger('produit_idP');
            // $table->foreign('idProduit')->references('idP')->on('produits');
          
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
        Schema::dropIfExists('commandes');
    }
};
