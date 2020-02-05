<?php

use Illuminate\Database\Seeder;

class UserVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = App\Video::all();
        $users = App\User::all();
        $faker = Faker\Factory::create();

        foreach(range(1, 300000) as $item) {
            App\UserVideo::create([
                'user_id' => $users->random()->id,
                'video_id' => $videos->random()->id,
                'note' => $faker->sentence,
            ]);
        }
    }
}
