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
            'name' => 'Electrician'
        ]);

        DB::table('category')->insert([
            'id' => 2,
            'name' => 'Carpenter'
        ]);

        DB::table('category')->insert([
            'id' => 3,
            'name' => 'Chef'
        ]);

        DB::table('category')->insert([
            'id' => 4,
            'name' => 'Musician'
        ]);

        DB::table('category')->insert([
            'id' => 5,
            'name' => 'Photographer'
        ]);
        
        DB::table('category')->insert([
            'id' => 6,
            'name' => 'Mechanic'
        ]);

        DB::table('category')->insert([
            'id' => 7,
            'name' => 'Teacher'
        ]);

        DB::table('category')->insert([
            'id' => 8,
            'name' => 'Lawyer'
        ]);

        DB::table('category')->insert([
            'id' => 9,
            'name' => 'Gardener'
        ]);
    }
}
