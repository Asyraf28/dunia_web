<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalTable extends Migration
{
    public function up()
    {
        Schema::create('soal', function (Blueprint $table) {
            $table->string('id', 10)->primary();
            $table->string('jawaban', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('soal');
    }
}