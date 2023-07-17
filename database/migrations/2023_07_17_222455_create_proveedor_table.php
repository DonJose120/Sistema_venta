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
        Schema::create('proveedor', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('last name', 50);
            $table->string('address', 30);
            $table->string('telefono', 14);
            $table->string('correo', 25);

            $table->bigInteger('ciudad_id')->unsigned();

            $table->foreign('ciudad_id')->references('id')->on('ciudad')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedor');
    }
};
