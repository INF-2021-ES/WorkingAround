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

        

    }
}
