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

        factory(\App\Models\Stream::class)->create([
            'name' => 'lamegaforgelive',
            'slug_name' => 'lamegaforgelive',
            'selected' => true,
        ]);
    }
}
