<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'id' => 1,
            'name' => 'Miguel',
            'email' => 'miguel@ismai.pt',
            'password' => bcrypt('miguel'),
            'address' => 'Famalicao'
        ]);
        $user1->assignRole('client');

        $user2 = User::create([
            'id' => 2,
            'name' => 'Francisco',
            'email' => 'francisco@ismai.pt',
            'password' => bcrypt('francisco'),
            'address' => 'Gaia'
        ]);
        $user2->assignRole('client');

        $user3 = User::create([
            'id' => 3,
            'name' => 'Ricardo',
            'email' => 'ricardo@ismai.pt',
            'password' => bcrypt('ricardo'),
            'address' => 'Porto'
        ]);
        $user3->assignRole('worker');

        $user4 = User::create([
            'id' => 4,
            'name' => 'Hugo',
            'email' => 'hugo@ismai.pt',
            'password' => bcrypt('hugo'),
            'address' => 'Povoa'
        ]);

        $user4->assignRole('worker');

        $user5 = User::create([
            'id' => 5,
            'name' => 'Admin',
            'email' => 'admin@admin.pt',
            'password' => bcrypt('admin'),
            'address' => 'Owner'
        ]);

        $user5->assignRole('admin');
    }
}
