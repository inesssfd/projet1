<?php

// database/migrations/YYYY_MM_DD_create_rapports_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportsTable extends Migration
{
    public function up()
    {
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->date('dateRapport');
            $table->string('motif');
            $table->text('bilan');
            $table->unsignedBigInteger('idVisiteur');
            $table->unsignedBigInteger('idMedecin');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('idVisiteur')->references('idVisiteur')->on('visiteurs')->onDelete('cascade');
            $table->foreign('idMedecin')->references('id')->on('medecins')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rapports');
    }
}
