<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cafes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('location');
            $table->string('jam_buka');
            $table->string('jam_tutup');
            $table->text('deskripsi');
            $table->string('cafe_category');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cafes');
    }
};
