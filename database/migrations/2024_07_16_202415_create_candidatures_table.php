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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
        $table->text('biographie');
        $table->text('motivations');
        $table->string('statut');
        $table->date('dateSoumission');
        $table->date('dateLimite');
        $table->foreignId('user_id')->constrained();
        $table->foreignId('formation_id')->constrained();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
    }
};
