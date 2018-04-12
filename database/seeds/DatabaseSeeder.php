<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(VideoChannelsTableSeeder::class);
        $this->call(StreamTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);

        if (env('APP_ENV') == 'dev') {
            $this->call(PostsTableSeeder::class);
            $this->call(VideosTableSeeder::class);
        }
    }
}
