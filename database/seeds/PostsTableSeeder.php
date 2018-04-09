<?php

use Illuminate\Database\Seeder;

use App\Models\Category;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        foreach ($categories as $category) {

            factory(App\Models\Post::class, 5)->make([
                'user_id' => 1,
            ])->each(function ($post) use($category) {
                $post->thumbnail()->associate(
                    factory(App\Models\Thumbnail::class)->create()
                ); 
                $post->category()->associate($category->id);                 
            })->each(function($post){
                $post->save();
            });
        }
    }
}
