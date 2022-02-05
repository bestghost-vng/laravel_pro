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
                'tenthanhpho'=>'banh'.$i,
                'mota'=>'dep'.$i,
                'id_vungmien'=>$i,
                'hinhanh'=>'hinh anh'.$i,
                'id_diadiem'=>$i,
                'trangthai'=>$i
              ]
              );
              $dacSan->save();}
    }
}
