<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = Category::create([
            'name' => 'Appartment',
            'slug' => 'Appartment',
        ]);
        $category = Category::create([
            'name' => 'House',
            'slug' => 'house',
        ]);
        $category = Category::create([
            'name' => 'Villa',
            'slug' => 'villa',
        ]);
        $category = Category::create([
            'name' => 'Warehouse',
            'slug' => 'warehouse',
        ]);
        $category = Category::create([
            'name' => 'Office',
            'slug' => 'office',
        ]);
    }
}
