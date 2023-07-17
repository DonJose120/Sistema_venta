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
        Schema::create('detalleFactura', function (Blueprint $table) {
            $table->id();
            $table->decimal('subtotal',10,2);

            $table->bigInteger('factura_id')->unsigned();
            $table->bigInteger('producto_id')->unsigned();

            $table->foreign('factura_id')->references('id')->on('factura')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('producto')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalleFactura');
    }
};
