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
        $hashChannels = ['UCJfprI19VJckLGURSrD3dQQ'];

        foreach ($hashChannels as $hash) {
            
            $videoChannel = factory(\App\Models\VideoChannel::class)->create([
                'hash' => $hash
            ]);

            //factory(\App\Models\Video::class, 50)->create([
            //    'video_channel_id' => $videoChannel->id,
            //]);
        }
    }
}
