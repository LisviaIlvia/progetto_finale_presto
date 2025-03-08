<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ad_id')->nullable();
            // Definisco la relazione con la tabella ads
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('cascade'); 
            $table->string('path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        // rimuovo la chiave esterna e la colonna ad_id
        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign(['ad_id']); // Rimuove la chiave esterna
            $table->dropColumn('ad_id'); // Rimuove la colonna ad_id
        });
        
        // Poi posso rimuovere la tabella 'images'
        Schema::dropIfExists('images');
    }
}
