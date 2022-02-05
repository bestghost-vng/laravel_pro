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
            $table->string('tenthanhpho');
            $table->foreignId('id_vungmien')->references('id')->on('vung_miens');
            $table->foreignId('id_diadiem')->references('id')->on('dia_diems');
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
