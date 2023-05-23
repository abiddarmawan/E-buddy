<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
    public function up(): void
    {

        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_makanan');
            $table->string('harga');
            $table->integer('jumlah_barang');
            $table->string('deskripsi');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
