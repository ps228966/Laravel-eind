<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert(
            $songs = 
            [
            [
                'game_name' => "gayest",
                'release_date' => "2022-11-08 12:52:32",
                'developer' => "gay",
                'publisher' => "gayer",
                'space_required' => "32,13",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            ]
        );
    }
}
