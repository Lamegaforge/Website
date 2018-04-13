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
                $post->thumbnail()->associate($this->getRandomThumbnail());
                $post->category()->associate($category->id);
            })->each(function($post){
                $post->save();
            });
        }
    }

    protected function getRandomThumbnail()
    {
        $faker = \Faker\Factory::create();

        $thumbnails = [
            [
                'name' =>  $faker->name,
                'type' =>  'image',
                'hash' =>  '/img/blog/blog-1.jpg',
            ],
            [
                'name' =>  $faker->name,
                'type' =>  'video',
                'hash' =>  $faker->randomElement(config('video.drivers.mock.list_hash')),
            ],
            [
                'name' =>  $faker->name,
                'type' =>  'soundclound',
                'hash' =>  '228800029',
            ]
        ];

        shuffle($thumbnails);

        return factory(App\Models\Thumbnail::class)->create($thumbnails[0]);        
    }
}
