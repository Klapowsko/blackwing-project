<?php

namespace Database\Seeders;

use Database\Factories\PartsFactory;
use Illuminate\Database\Seeder;

class PartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PartsFactory::factory()
            ->count(10)
            ->create();
    }
}
