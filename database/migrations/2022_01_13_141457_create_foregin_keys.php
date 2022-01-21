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
            $table->foreign('id_dichvu')->references('id')->on('dich_vus');
            $table->foreign('id_nguoidung')->references('id')->on('users');
        });
        // Schema::table('hinh_bai_viets', function (Blueprint $table) {
        //     $table->foreign('id_hinh_anh')->references('id')->on('danh_sach_hinh_bai_viets');
        // });
        Schema::table('danh_sach_hinh_dich_vus', function (Blueprint $table) {
            $table->foreign('id_hinh')->references('id')->on('hinh_dich_vus');
        });
        Schema::table('danh_sach_hinh_khach_sans', function (Blueprint $table) {
            $table->foreign('id_hinh')->references('id')->on('hinh_khach_sans');
        });
        Schema::table('danh_sach_hinh_quan_ans', function (Blueprint $table) {
            $table->foreign('id_hinh')->references('id')->on('hinh_quan_ans');
        });
        Schema::table('danh_sach_hinh_dia_diems', function (Blueprint $table) {
            $table->foreign('id_hinh')->references('id')->on('hinh_dia_diems');
        });
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
