<?php

use App\Models\jammodel;
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
        Schema::create('dashboards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jammodel_id');
            $table->foreignId('post_id');
            $table->string('pelanggan');
            $table->string('nama');
            $table->string('jam');          
            $table->string('email');
            $table->string('telp');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashboards');
    }
};
