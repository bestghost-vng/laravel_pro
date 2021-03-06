<?php

namespace Database\Seeders;

use App\Models\QuanAn;
use Illuminate\Database\Seeder;

class QuanAnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=2;$i++)
         { $dacSan= new QuanAn;
          $dacSan->fill(
              [
                'tenquanan'=>'banh'.$i,
                'mota'=>$i,
                'kinhdo'=>$i,
                'vido'=>$i,
                'hinhanh'=>'hinh anh'.$i,
                'id_diadiem'=>$i,
                'diachi'=>$i,
              ]
              );
              $dacSan->save();}
    }
}
