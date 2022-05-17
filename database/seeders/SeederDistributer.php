<?php

namespace Database\Seeders;

use App\Models\Distributer;
use Illuminate\Database\Seeder;

class SeederDistributer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Distributer::factory()->count(50)->create();
    }
}
