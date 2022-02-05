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
                
                'hinhanh'=>'hinh anh'.$i,
                
                'diachi'=>$i,
              ]
              );
              $dacSan->save();}
    }
}
