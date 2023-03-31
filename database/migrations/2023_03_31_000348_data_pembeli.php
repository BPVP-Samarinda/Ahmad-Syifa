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
        Schema::create('datapembeli', function($table){
            $table->id();
            $table->string('nama')->nullable();
            $table->string('gender')->nullable();
            $table->integer('umur')->default(0);
            $table->string('alamat')->nullable();
            $table->string('agama')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapembeli');
    }
};
