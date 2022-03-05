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
                'tenthanhpho'=>'banh'.$i,
                'mota'=>'dep'.$i,
                'kinhdo'=>$i,
                'vido'=>$i,
                'id_vungmien'=>$i,
                'hinhanh'=>'hinh anh'.$i,
                'trangthai'=>$i
              ]
              );
              $dacSan->save();}
    }
}
