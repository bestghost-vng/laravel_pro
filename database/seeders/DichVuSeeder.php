<?php

namespace Database\Seeders;

use App\Models\DichVu;
use Illuminate\Database\Seeder;

class DichVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=2;$i++)
         { $dacSan= new DichVu;
          $dacSan->fill(
              [
                'tendichvu'=>'chay'.$i,
                'mota'=>'ngon'.$i,
                'id_diadiem'=>$i,
                'hinhanh'=>'hinh anh'.$i,
                'trangthai'=>$i
              ]
              );
              $dacSan->save();}
    }
}
