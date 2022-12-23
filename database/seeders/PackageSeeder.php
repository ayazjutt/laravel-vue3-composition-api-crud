<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            'title' => 'Lite',
            'description' => 'perfect to get started',
            'price_per_month' => '11',
            'price_per_annum' => '105'
        ]);

        DB::table('packages')->insert([
            'title' => 'Pro',
            'description' => 'Best for professionals',
            'price_per_month' => '19',
            'price_per_annum' => '180',
            'is_popular' => true
        ]);

        DB::table('packages')->insert([
            'title' => 'Ultimate',
            'description' => 'Toolset for hard players',
            'price_per_month' => '35',
            'price_per_annum' => '336',
            'is_default' => true
        ]);
    }
}
