<?php

namespace Database\Seeders;

use App\Models\BaiViet;
use Illuminate\Database\Seeder;

class BaiVietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=2;$i++)
         { $dacSan= new BaiViet;
          $dacSan->fill(
              [
                'noidung'=>'ngon'.$i,
                'like'=>$i,
                'dislike'=>$i,
                'view'=>$i,
                'trangthai'=>$i,
              
                'id_diadiem'=>$i,
            
                'id_nguoidung'=>$i,
              ]
              );
              $dacSan->save();}
    }
}
