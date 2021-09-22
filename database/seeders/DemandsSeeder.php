<?php

namespace Database\Seeders;

use Database\Factories\DemandsFactory;
use Illuminate\Database\Seeder;

class DemandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DemandsFactory::factory()
            ->count(10)
            ->create();
    }
}
