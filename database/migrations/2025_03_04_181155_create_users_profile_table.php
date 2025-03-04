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
        Schema::create('users_profile', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); //llave foranea a tabla users y 
            $table->string('last_pat', 100);
            $table->string('last_mat', 100)->nullable();
            $table->date('date_of_birth')->nullable(); // Fecha de nacimiento
            $table->string('gender', 10)->nullable(); // Género
            $table->string('phone', 15)->nullable(); // Teléfono
            $table->string('address', 255)->nullable(); // Dirección
            $table->string('city', 100)->nullable(); // Ciudad
            $table->string('state', 100)->nullable(); // Estado/Provincia
            $table->string('country', 100)->nullable(); // País
            $table->string('postal_code', 20)->nullable(); // Código postal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_profile');
    }
};
