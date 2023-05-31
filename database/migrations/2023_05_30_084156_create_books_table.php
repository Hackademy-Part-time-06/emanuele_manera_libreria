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
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // default 
            $table->string('title', 150); // tipo stringa, nome title e max 150 caratteri 
            $table->string('author'); // tipo stringa e nome author 
            $table->integer('pages'); // tipo intero e nome pages 
            $table->timestamps(); // default
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
