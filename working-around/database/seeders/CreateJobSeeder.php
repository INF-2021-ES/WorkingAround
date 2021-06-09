<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job')->insert([
            'id' => 1,
            'service_id' => 1,
            'workerId' => 3,
            'clientId' => 1,
            'accepted' => false
        ]);

        DB::table('job')->insert([
            'id' => 2,
            'service_id' => 2,
            'workerId' => 3,
            'clientId' => 2,
            'accepted' => false
        ]);

        DB::table('job')->insert([
            'id' => 3,
            'service_id' => 3,
            'workerId' => 3,
            'clientId' => 2,
            'accepted' => false
        ]);

    }
}
