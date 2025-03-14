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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->enum('statut', ['encours', 'accepte', 'annule'])->default('encours');
            $table->foreignId('id_passager')->constrained('users')->onDelete('cascade');
            $table->foreignId('id_trajet')->constrained('trajets')->onDelete('cascade');
            $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
