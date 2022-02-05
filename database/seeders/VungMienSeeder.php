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
        for($i=1;$i<=2;$i++)
        { $dacSan= new VungMien;
         $dacSan->fill(
             [
               'tenvung'=>'Bac'.$i,
             ]
             );
             $dacSan->save();}
    }
}
