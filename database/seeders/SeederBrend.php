<?php

namespace Database\Seeders;

use App\Models\Brend;
use Illuminate\Database\Seeder;

class SeederBrend extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brend::factory()->count(80)->create();
    }
}
