<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThanhPhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanh_phos', function (Blueprint $table) {
            $table->id();
            $table->string('tendiadiem');
            $table->string('kinhdo');
            $table->string('vido');
            $table->foreignId('id_diadiem')->references('id')->on('dia_diems');
            $table->foreignId('quanan_id')->references('id')->on('quan_ans');
            $table->foreignId('dichvu_id')->references('id')->on('dich_vus');
            $table->foreignId('khachsan_id')->references('id')->on('khach_sans');
            $table->string('hinhanh');
            $table->text('mota');
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
        Schema::dropIfExists('thanh_phos');
    }
}
