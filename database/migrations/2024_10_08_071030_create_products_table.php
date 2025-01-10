<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_xxxxxx_create_products_table.php
   public function up()
   {
       Schema::create('products', function (Blueprint $table) {
           $table->id();
           $table->string('name');
           $table->decimal('price', 10, 2);
           $table->string('image')->nullable();
           $table->text('description')->nullable();
           $table->timestamps();
       });
   }
   


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};