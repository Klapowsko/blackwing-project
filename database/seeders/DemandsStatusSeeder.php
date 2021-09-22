<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemandsStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('demands_status')->insert(
            [
            'name' => 'Aberta',
            'created_at' => date('Y-m-d', strtotime('now')),
            'updated_at' => date('Y-m-d', strtotime('now')),
            ]
        );

        DB::table('demands_status')->insert(
            [
                'name' => 'Fechada',
                'created_at' => date('Y-m-d', strtotime('now')),
                'updated_at' => date('Y-m-d', strtotime('now')),
            ]
        );
    }
}
