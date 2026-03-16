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
       Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku', 50)->unique();
            $table->string('barcode', 50)->nullable();
            $table->string('name', 150);
            $table->text('description')->nullable();
            $table->string('image_path', 300)->nullable();
            
            $table->decimal('purchase_price', 12, 2)->default(0);
            $table->decimal('sale_price', 12, 2)->default(0);
            $table->decimal('profit_margin', 5, 2)->nullable();
            
            $table->integer('stock')->default(0);
            $table->integer('min_stock')->default(5);
            
            // Relaciones: fijate que Laravel asume que 'category_id' busca la tabla 'categories'
            $table->foreignId('category_id')->constrained()->onRestrictDelete();
            $table->foreignId('brand_id')->constrained()->onRestrictDelete();
            
            $table->boolean('is_active')->default(true);
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
