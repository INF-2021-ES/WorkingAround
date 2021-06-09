<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('service')->insert([
            'id' => 1,
            'category_id' => 1,
            'worker_id' => 3,
            'description' => 'Electrician',
            'price' => 30,
            'reserved' => true
        ]);
        DB::table('service')->insert([
            'id' => 2,
            'category_id' => 1,
            'worker_id' => 3,
            'description' => 'Electrician',
            'price' => 40,
            'reserved' => true
        ]);

        DB::table('service')->insert([
            'id' => 3,
            'category_id' => 1,
            'worker_id' => 3,
            'description' => 'Electrician',
            'price' => 30,
            'reserved' => true
        ]);

        DB::table('service')->insert([
            'id' => 4,
            'category_id' => 1,
            'worker_id' => 4,
            'description' => 'Electrician',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 5,
            'category_id' => 2,
            'worker_id' => 4,
            'description' => 'Carpenter Description',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 6,
            'category_id' => 3,
            'worker_id' => 3,
            'description' => 'Chef',
            'price' => 69,
            'reserved' => false
        ]);
    }
}
