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
        // Carpenter
        DB::table('service')->insert([
            'id' => 1,
            'category_id' => 1,
            'worker_id' => 3,
            'description' => 'Carpenter',
            'price' => 30,
            'reserved' => false
        ]);
        
        DB::table('service')->insert([
            'id' => 2,
            'category_id' => 1,
            'worker_id' => 4,
            'description' => 'Carpenter',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 3,
            'category_id' => 1,
            'worker_id' => 3,
            'description' => 'Carpenter',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 4,
            'category_id' => 1,
            'worker_id' => 4,
            'description' => 'Carpenter',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 5,
            'category_id' => 1,
            'worker_id' => 3,
            'description' => 'Carpenter',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 6,
            'category_id' => 1,
            'worker_id' => 4,
            'description' => 'Carpenter',
            'price' => 30,
            'reserved' => false
        ]);

        // Chef
        DB::table('service')->insert([
            'id' => 7,
            'category_id' => 2,
            'worker_id' => 3,
            'description' => 'Chef',
            'price' => 30,
            'reserved' => false
        ]);
        
        DB::table('service')->insert([
            'id' => 8,
            'category_id' => 2,
            'worker_id' => 4,
            'description' => 'Chef',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 9,
            'category_id' => 2,
            'worker_id' => 3,
            'description' => 'Chef',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 10,
            'category_id' => 2,
            'worker_id' => 4,
            'description' => 'Chef',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 11,
            'category_id' => 2,
            'worker_id' => 3,
            'description' => 'Chef',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 12,
            'category_id' => 2,
            'worker_id' => 4,
            'description' => 'Chef',
            'price' => 30,
            'reserved' => false
        ]);

        // Electrician
        DB::table('service')->insert([
            'id' => 13,
            'category_id' => 3,
            'worker_id' => 3,
            'description' => 'Electrician',
            'price' => 30,
            'reserved' => false
        ]);
        
        DB::table('service')->insert([
            'id' => 14,
            'category_id' => 3,
            'worker_id' => 4,
            'description' => 'Electrician',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 15,
            'category_id' => 3,
            'worker_id' => 3,
            'description' => 'Electrician',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 16,
            'category_id' => 3,
            'worker_id' => 4,
            'description' => 'Electrician',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 17,
            'category_id' => 3,
            'worker_id' => 3,
            'description' => 'Electrician',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 18,
            'category_id' => 3,
            'worker_id' => 4,
            'description' => 'Electrician',
            'price' => 30,
            'reserved' => false
        ]);

        // Gardener
        DB::table('service')->insert([
            'id' => 19,
            'category_id' => 4,
            'worker_id' => 3,
            'description' => 'Gardener',
            'price' => 30,
            'reserved' => false
        ]);
        
        DB::table('service')->insert([
            'id' => 20,
            'category_id' => 4,
            'worker_id' => 4,
            'description' => 'Gardener',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 21,
            'category_id' => 4,
            'worker_id' => 3,
            'description' => 'Gardener',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 22,
            'category_id' => 4,
            'worker_id' => 4,
            'description' => 'Gardener',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 23,
            'category_id' => 4,
            'worker_id' => 3,
            'description' => 'Gardener',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 24,
            'category_id' => 4,
            'worker_id' => 4,
            'description' => 'Gardener',
            'price' => 30,
            'reserved' => false
        ]);

        // Lawyer
        DB::table('service')->insert([
            'id' => 25,
            'category_id' => 5,
            'worker_id' => 3,
            'description' => 'Lawyer',
            'price' => 30,
            'reserved' => false
        ]);
        
        DB::table('service')->insert([
            'id' => 26,
            'category_id' => 5,
            'worker_id' => 4,
            'description' => 'Lawyer',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 27,
            'category_id' => 5,
            'worker_id' => 3,
            'description' => 'Lawyer',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 28,
            'category_id' => 5,
            'worker_id' => 4,
            'description' => 'Lawyer',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 29,
            'category_id' => 5,
            'worker_id' => 3,
            'description' => 'Lawyer',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 30,
            'category_id' => 5,
            'worker_id' => 4,
            'description' => 'Lawyer',
            'price' => 30,
            'reserved' => false
        ]);

        // Mechanic
        DB::table('service')->insert([
            'id' => 31,
            'category_id' => 6,
            'worker_id' => 3,
            'description' => 'Mechanic',
            'price' => 30,
            'reserved' => false
        ]);
        
        DB::table('service')->insert([
            'id' => 32,
            'category_id' => 6,
            'worker_id' => 4,
            'description' => 'Mechanic',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 33,
            'category_id' => 6,
            'worker_id' => 3,
            'description' => 'Mechanic',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 34,
            'category_id' => 6,
            'worker_id' => 4,
            'description' => 'Mechanic',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 35,
            'category_id' => 6,
            'worker_id' => 3,
            'description' => 'Mechanic',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 36,
            'category_id' => 6,
            'worker_id' => 4,
            'description' => 'Mechanic',
            'price' => 30,
            'reserved' => false
        ]);

        // Musician
        DB::table('service')->insert([
            'id' => 37,
            'category_id' => 7,
            'worker_id' => 3,
            'description' => 'Musician',
            'price' => 30,
            'reserved' => false
        ]);
        
        DB::table('service')->insert([
            'id' => 38,
            'category_id' => 7,
            'worker_id' => 4,
            'description' => 'Musician',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 39,
            'category_id' => 7,
            'worker_id' => 3,
            'description' => 'Musician',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 40,
            'category_id' => 7,
            'worker_id' => 4,
            'description' => 'Musician',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 41,
            'category_id' => 7,
            'worker_id' => 3,
            'description' => 'Musician',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 42,
            'category_id' => 7,
            'worker_id' => 4,
            'description' => 'Musician',
            'price' => 30,
            'reserved' => false
        ]);

        // Plumber
        DB::table('service')->insert([
            'id' => 43,
            'category_id' => 8,
            'worker_id' => 3,
            'description' => 'Plumber',
            'price' => 30,
            'reserved' => false
        ]);
        
        DB::table('service')->insert([
            'id' => 44,
            'category_id' => 8,
            'worker_id' => 4,
            'description' => 'Plumber',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 45,
            'category_id' => 8,
            'worker_id' => 3,
            'description' => 'Plumber',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 46,
            'category_id' => 8,
            'worker_id' => 4,
            'description' => 'Plumber',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 47,
            'category_id' => 8,
            'worker_id' => 3,
            'description' => 'Plumber',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 48,
            'category_id' => 8,
            'worker_id' => 4,
            'description' => 'Plumber',
            'price' => 30,
            'reserved' => false
        ]);

        // Teacher
        DB::table('service')->insert([
            'id' => 49,
            'category_id' => 9,
            'worker_id' => 3,
            'description' => 'Teacher',
            'price' => 30,
            'reserved' => false
        ]);
        
        DB::table('service')->insert([
            'id' => 50,
            'category_id' => 9,
            'worker_id' => 4,
            'description' => 'Teacher',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 51,
            'category_id' => 9,
            'worker_id' => 3,
            'description' => 'Teacher',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 52,
            'category_id' => 9,
            'worker_id' => 4,
            'description' => 'Teacher',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 53,
            'category_id' => 9,
            'worker_id' => 3,
            'description' => 'Teacher',
            'price' => 30,
            'reserved' => false
        ]);

        DB::table('service')->insert([
            'id' => 54,
            'category_id' => 9,
            'worker_id' => 4,
            'description' => 'Teacher',
            'price' => 30,
            'reserved' => false
        ]);
    }
}
