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
        $channels = [
            [
                'hash' => 'UCJfprI19VJckLGURSrD3dQQ',
                'name' => 'Rediff',
                'slug_name' => 'rediff',
            ],
            [
                'hash' => 'UCv9-pi5_GsoJRFwmzfT6thA',
                'name' => 'Chaine principale',
                'slug_name' => 'principale',
            ],
        ];

        foreach ($channels as $channel) {
            
            $videoChannel = factory(\App\Models\VideoChannel::class)->create([
                'name' => $channel['name'],
                'slug_name' => $channel['slug_name'],
                'hash' => $channel['hash'],
            ]);

            //factory(\App\Models\Video::class, 50)->create([
            //    'video_channel_id' => $videoChannel->id,
            //]);
        }
    }
}
