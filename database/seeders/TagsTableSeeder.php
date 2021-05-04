<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag = Tag::create([
            'name' => 'Architecture',
            'slug' => 'architecture',
        ]);
        $tag = Tag::create([
            'name' => 'Internal',
            'slug' => 'internal',
        ]);
        $tag = Tag::create([
            'name' => 'External',
            'slug' => 'external',
        ]);
        $tag = Tag::create([
            'name' => 'Old',
            'slug' => 'old',
        ]);
        $tag = Tag::create([
            'name' => 'Modern',
            'slug' => 'modern',
        ]);
        $tag = Tag::create([
            'name' => 'New',
            'slug' => 'new',
        ]);
        $tag = Tag::create([
            'name' => 'Building',
            'slug' => 'building',
        ]);
    }
}
