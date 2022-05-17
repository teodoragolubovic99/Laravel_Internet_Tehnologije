<?php

namespace Database\Seeders;

use App\Models\Proizvod;
use Illuminate\Database\Seeder;

class SeederProizvod extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proizvod::factory()->count(100)->create();
    }
}
