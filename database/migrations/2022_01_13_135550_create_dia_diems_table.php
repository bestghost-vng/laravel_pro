<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiaDiemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dia_diems', function (Blueprint $table) {
            $table->id();
            $table->string('tendiadiem');
            $table->double('kinhdo');
            $table->double('vido');
            $table->string('mieuta');   
            $table->foreignId('quanan_id')->references('id')->on('quan_ans');
            $table->foreignId('dichvu_id')->references('id')->on('dich_vus');
            $table->foreignId('khachsan_id')->references('id')->on('khach_sans');
            $table->integer('trangthai');
            $table->softDeletes();
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
        Schema::dropIfExists('dia_diems');
    }
}
