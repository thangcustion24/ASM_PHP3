<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Danhmuc;

class DanhmucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Danhmuc::factory()->count(3)->create();
        
    }
}
