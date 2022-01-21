<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhSachHinhBaiVietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danh_sach_hinh_bai_viets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_hinh')->references('id')->on('hinh_bai_viets');
            $table->foreignId('id_bang')->references('id')->on('bai_viets');
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
        Schema::dropIfExists('danh_sach_hinh_bai_viets');
    }
}
