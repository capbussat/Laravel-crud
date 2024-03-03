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
        // Utilitza en development si la taula ja existeix
        // Schema::dropIfExists('posts');
        Schema::create('posts', function (Blueprint $table) {
             $table->id();
             $table->string('type')->default('post');
             $table->string('status')->default('draft');
             $table->text('title');
             $table->longText('content');
             $table->timestamps();
         });
     }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
};
