<?php

namespace Database\Seeders;

use App\Models\ThanhPho;
use Illuminate\Database\Seeder;

class ThanhPhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=2;$i++)
         { $dacSan= new ThanhPho;
          $dacSan->fill(
              [
                'tendiadiem'=>'khanhhoa'.$i,
                'kinhdo'=>$i,
                'vido'=>$i,
                'hinhanh'=>$i,
                'mota'=>'hinh anh'.$i,
                'id_diadiem'=>$i,
                'quanan_id'=>$i,
                'khachsan_id'=>$i,
                'dichvu_id'=>$i,
                'trangthai'=>$i,
              ]
              );
              $dacSan->save();}
    }
}
