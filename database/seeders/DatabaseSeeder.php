<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SeederDistributer;
use Database\Seeders\SeederBrend;
use Database\Seeders\SeederProizvod;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $distributer = new SeederDistributer;
        $distributer->run();

        $proizvod = new SeederProizvod;
        $proizvod->run();

        $brend = new SeederBrend;
        $brend->run();
    }
}
