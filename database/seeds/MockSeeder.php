<?php

use Illuminate\Database\Seeder;

class MockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_ENV') != 'dev') {
            throw new \Exception("Not allowed in this environment");
        }
           
        $this->call(PostsTableSeeder::class);
        $this->call(VideosTableSeeder::class);
    }
}
