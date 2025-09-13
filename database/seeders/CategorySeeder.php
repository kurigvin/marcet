<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = ['Landing Page', 'E-commerce', 'Portfolio', 'SaaS'];
        foreach ($categories as $cat) {
            Category::firstOrCreate(['name' => $cat]);
        }
    }

}
