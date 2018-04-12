<?php

use Illuminate\Database\Seeder;

use App\Models\videoChannel;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listHash = config('video.drivers.mock.list_hash');

        $videoChannel = VideoChannel::first();

        foreach ($listHash as $hash) {

            $videoChannel = factory(\App\Models\Video::class)->create([
                'hash' => $hash,
                'video_channel_id' => $videoChannel->id,
            ]);
        }
    }
}
