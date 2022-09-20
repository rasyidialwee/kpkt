<?php

namespace Database\Seeders;

use App\Models\Tugasan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TugasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tugasan::factory(5)->create();
    }
}
