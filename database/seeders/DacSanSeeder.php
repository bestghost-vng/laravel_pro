<?php

namespace Database\Seeders;

use App\Models\DacSan;
use Illuminate\Database\Seeder;

class DacSanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=2;$i++)
         { $dacSan= new DacSan;
          $dacSan->fill(
              [
                'tendacsan'=>'banh'.$i,
                'mota'=>'ngon'.$i,
                'gia'=>1000*$i,
                'hinhanh'=>'hinh anh'.$i,
                'quanan_id'=>$i,
                'trangthai'=>$i
              ]
              );
              $dacSan->save();}
    }
}
