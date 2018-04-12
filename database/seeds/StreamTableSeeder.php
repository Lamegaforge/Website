<?php

use Illuminate\Database\Seeder;

class StreamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Stream::class)->create([
            'name' => 'lamegaforgelive',
            'slug_name' => 'lamegaforgelive',
            'selected' => true,
        ]);
    }
}
