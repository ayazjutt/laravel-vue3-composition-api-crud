<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'CMS integration',
            ],
            [
                'title' => 'Email & SMS remiders',
            ],
            [
                'title' => 'Customer support 24/7',
            ],
            [
                'title' => 'Advance analytics',
            ],
            [
                'title' => '100+ integrations',
            ],
            [
                'title' => 'Chat widget',
            ],
            [
                'title' => 'Templates library',
            ],
            [
                'title' => 'Daily performance reports',
            ],
            [
                'title' => 'Dedicated assistance',
            ],
            [
                'title' => 'Marketing tools and automations',
            ]
        ];

        DB::table('features')->insert($data);
        DB::table('features')->insert([
            'title' => 'Artificial intelligence',
            'status' => 'Beta'
        ]);
    }
}
