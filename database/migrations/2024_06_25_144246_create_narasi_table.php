<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNarasiTable extends Migration
{
    public function up()
    {
        Schema::create('narasi', function (Blueprint $table) {
            $table->string('id', 10)->primary();
            $table->string('narasi', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('narasi');
    }
}