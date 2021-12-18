<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanlegalisirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_legalisirs', function (Blueprint $table) {
            $table->id();
            $table->string('id_pengajuan')->unique();
            $table->string('nama');
            $table->string('nisn');
            $table->string('tahun_tamat');
            $table->string('status');
            $table->string('perihal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_legalisirs');
    }
}
