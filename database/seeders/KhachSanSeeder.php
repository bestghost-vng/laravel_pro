<?php

namespace Database\Seeders;

use App\Models\KhachSan;
use Illuminate\Database\Seeder;

class KhachSanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=2;$i++)
        { $dacSan= new KhachSan;
         $dacSan->fill(
             [
               'tenkhachsan'=>'banh'.$i,
               'hinhanh'=>'hinh anh'.$i,
               'mota'=>'chan'.$i,
               'kinhdo'=>$i,
               'vido'=>$i,
               'diachi'=>$i,'id_diadiem'=>$i,
               'trangthai'=>$i,
               'danhgia'=>$i,
             ]
             );
             $dacSan->save();}
    }
}
