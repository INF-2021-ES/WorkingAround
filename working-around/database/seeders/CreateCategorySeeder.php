<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'id' => 1,
            'name' => 'Carpenter'
        ]);

        DB::table('category')->insert([
            'id' => 2,
            'name' => 'Chef'
        ]);

        DB::table('category')->insert([
            'id' => 3,
            'name' => 'Electrician'
        ]);

        DB::table('category')->insert([
            'id' => 4,
            'name' => 'Gardener'
        ]);

        DB::table('category')->insert([
            'id' => 5,
            'name' => 'Lawyer'
        ]);
        
        DB::table('category')->insert([
            'id' => 6,
            'name' => 'Mechanic'
        ]);

        DB::table('category')->insert([
            'id' => 7,
            'name' => 'Musician'
        ]);

        DB::table('category')->insert([
            'id' => 8,
            'name' => 'Plumber'
        ]);

        DB::table('category')->insert([
            'id' => 9,
            'name' => 'Teacher'
        ]);
    }
}
