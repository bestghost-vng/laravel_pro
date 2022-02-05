<?php

namespace Database\Seeders;

use App\Models\DiaDiem;
use Illuminate\Database\Seeder;

class DiaDiemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=2;$i++)
         { $dacSan= new DiaDiem;
          $dacSan->fill(
              [
                'tendiadiem'=>'khanhhoa'.$i,
                'kinhdo'=>$i,
                'vido'=>$i,
                'mieuta'=>'hinh anh'.$i,
                'quanan_id'=>$i,
                'khachsan_id'=>$i,
                'dichvu_id'=>$i,
                'trangthai'=>$i,
              ]
              );
              $dacSan->save();}
    }
}
