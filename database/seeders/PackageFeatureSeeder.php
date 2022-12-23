<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['package_id' => 1, 'feature_id' => 1],
            ['package_id' => 1, 'feature_id' => 2],
            ['package_id' => 1, 'feature_id' => 3],
            ['package_id' => 2, 'feature_id' => 4],
            ['package_id' => 2, 'feature_id' => 5],
            ['package_id' => 2, 'feature_id' => 6],
            ['package_id' => 2, 'feature_id' => 7],
            ['package_id' => 3, 'feature_id' => 8],
            ['package_id' => 3, 'feature_id' => 9],
            ['package_id' => 3, 'feature_id' => 10],
            ['package_id' => 3, 'feature_id' => 11],

        ];

        DB::table('package_features')->insert($data);
    }
}
