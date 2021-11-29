<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prizes')->insert([ 'name' => 'Hair Clip' ]);
        DB::table('prizes')->insert([ 'name' => 'Box of Crackers' ]);
        DB::table('prizes')->insert([ 'name' => 'Novelty Keychain' ]);
        DB::table('prizes')->insert([ 'name' => 'Rubber Band' ]);
        DB::table('prizes')->insert([ 'name' => 'A Goat' ]);

        DB::table('prizes')->insert([ 'name' => 'New Car', 'good_prize' => true ]);
        DB::table('prizes')->insert([ 'name' => 'Luxury Cruise', 'good_prize' => true ]);
        DB::table('prizes')->insert([ 'name' => '$10,000 Cash', 'good_prize' => true ]);
    }
}
