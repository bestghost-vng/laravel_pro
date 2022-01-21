<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiVietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_viets', function (Blueprint $table) {
            $table->id();
            $table->string('nguoi_dang');
            $table->dateTime('ngay_dang');
            $table->text('noi_dung');
            $table->integer('id_like');
            $table->integer('id_dislike');
            $table->integer('id_view');
            $table->integer('trangthai');
            $table->foreignId('id_quanan');
            $table->foreignId('id_dacsan');
            $table->foreignId('id_diadiem');
            $table->foreignId('id_dichvu');
            $table->foreignId('id_nguoidung');
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
        Schema::dropIfExists('bai_viets');
    }
}
