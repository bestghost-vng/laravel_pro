<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeginKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bai_viets', function (Blueprint $table) {
            $table->foreign('id_quanan')->references('id')->on('quan_ans');
            $table->foreign('id_dacsan')->references('id')->on('dac_sans');
            $table->foreign('id_diadiem')->references('id')->on('dia_diems');
            $table->foreign('id_khachsan')->references('id')->on('khach_sans');
            $table->foreign('id_dichvu')->references('id')->on('dich_vus');
            $table->foreign('id_nguoidung')->references('id')->on('users');
        });
        // Schema::table('dia_diems', function (Blueprint $table) {
        //     $table->foreign('thanhpho_id')->references('id')->on('thanh_phos');
        // });
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bai_viets', function (Blueprint $table) {
            //
        });
    }
}
