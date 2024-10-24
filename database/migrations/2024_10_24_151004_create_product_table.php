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

        Schema::create('categoria', function (Blueprint $table) {
            $table->id(); 
            $table->string('nome');
            $table->timestamps();
        });
    
        Schema::create('unidade_medida', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); 
            $table->timestamps();
        });
    
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->foreignId('unidade_medida_id')->constrained('unidade_medida');
            $table->decimal('valor', 8, 2);
            $table->integer('quantidade'); 
            $table->foreignId('categoria_id')->constrained('categoria'); 
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
