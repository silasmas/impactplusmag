<?php

use App\Models\type as tipe;
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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->nullable();
            $table->string('sousTitre')->nullable();
            $table->string('description')->nullable();
            $table->string('cover')->nullable();
            $table->string('auteur')->nullable();
            $table->string('video')->nullable();
            $table->string('is_active')->default("0");
            $table->string('is_visible')->default("0");
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();
            $table->foreignIdFor(tipe::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
