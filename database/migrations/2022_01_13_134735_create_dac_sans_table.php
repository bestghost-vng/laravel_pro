<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDacSansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dac_sans', function (Blueprint $table) {
            $table->id();
            $table->string('tendacsan');
            $table->text('mota');
            $table->integer('gia');
            $table->string('hinhanh');  
            $table->foreignId('quanan_id')->references('id')->on('quan_ans');  
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
        Schema::dropIfExists('dac_sans');
    }
}
