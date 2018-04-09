<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'nouvelle',
            'article',
        ];

        foreach ($categories as $category) {
            factory(\App\Models\Category::class)->create([
                'name' => $category,
            ]);
        }

    }
}
