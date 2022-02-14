<?php

namespace Database\Seeders;

use App\Models\VungMien;
use Illuminate\Database\Seeder;

class VungMienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $arr=['Bắc Bộ','Duyên Hải Miền Trung','Nam Bộ'];
        foreach($arr as $a)
        { $dacSan= new VungMien;
         $dacSan->fill(
             [
               'tenvung'=>$a,
             ]
             );
             $dacSan->save();}
    }
}
