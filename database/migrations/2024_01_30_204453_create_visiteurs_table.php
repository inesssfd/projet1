<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisiteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiteurs', function (Blueprint $table) {
            $table->id('idVisiteur');
            $table->string('nomVisiteur', 50)->nullable();
            $table->string('prenomVisiteur', 50)->nullable();
            $table->string('login', 50)->nullable();
            $table->string('mdp', 50)->nullable();
            $table->string('adresseVisiteur', 50)->nullable();
            $table->string('villeVisiteur', 50)->nullable();
            $table->integer('cp_visiteur')->nullable();
            $table->date('dateEmbaucheVisiteur')->nullable();
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
        Schema::dropIfExists('visiteurs');
    }
}

