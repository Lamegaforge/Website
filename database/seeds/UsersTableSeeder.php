<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class, 49)->create();

        factory(\App\Models\User::class)->create([
            'name' => 'test',
            'password' => 'test'
        ]);
    }
}
