<?php

namespace Database\Seeders;

use App\Models\QuanAn;
use App\Models\ThanhPho;
use App\Models\VungMien;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $this->call(
            [   
                QuanAnSeeder::class,
                DacSanSeeder::class,
                DichVuSeeder::class,
                KhachSanSeeder::class,
                VungMienSeeder::class,
                DiaDiemSeeder::class,
                ThanhPhoSeeder::class,
                BaiVietSeeder::class,
            ]
            );
    }
}
