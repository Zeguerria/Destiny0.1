<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parametres', function (Blueprint $table) {
            $table->id();
            $table->string('code',50);
            $table->string('libelle',200);
            $table->text('description');
            $table->string('supprimer')->default(0);
            $table->timestamps();
            $table->unsignedBigInteger('type_parametre_id')->default(0);
            $table->foreign('type_parametre_id')->references('id')->on('type_parametres')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametres');
    }
};
